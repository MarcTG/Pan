<?php

namespace App\Http\Controllers;

use App\Inventario;
use App\User;
use App\Receta;
use App\MateriaPrima;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\StockProducto;
use Carbon\Carbon;
class InventarioController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $inventario = DB::table('inventarios')
            ->join('users', 'users.id', '=' , 'inventarios.idEmpleado')
            ->join('recetas', 'recetas.id', '=', 'inventarios.idReceta')
            ->select( 'inventarios.id', 'inventarios.state','inventarios.created_at as fecha','inventarios.id','inventarios.porciones','users.nombre','recetas.nombre as receta' )
            ->where('inventarios.estado', '=', 1)
            ->orderByDesc('inventarios.created_at')
            ->get();
           
        return view('inventario.index')->with('items', $inventario);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('inventario.create')->with('recetas', Receta::all());
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $id=$request->idReceta;
        $materia = DB::select(DB::raw("select materia_primas.id, materia_recetas.cantidad
        from recetas, materia_recetas, materia_primas
        where recetas.id= materia_recetas.idReceta and materia_primas.id= materia_recetas.idMateria and recetas.id= $id"));
        foreach ($materia as $m) {
            $mat= MateriaPrima::find($m->id);
            if($mat->cantidad < $m->cantidad*$request->porciones){
                return redirect()->back()->with('info', 'Cantidad de materia prima insuficiente');
            }
        } 
        foreach ($materia as $m) {
            $mat= MateriaPrima::find($m->id);
            $mat->cantidad = $mat->cantidad - ($m->cantidad*$request->porciones);
            $mat->save();
        } 
        $inventario= new Inventario();
        $inventario->porciones = $request->porciones;
        $inventario->idEmpleado = auth()->user()->id;
        $inventario->idReceta = $request->idReceta;
        $inventario->save();
       
        return redirect()->route('index.inventario');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Inventario  $inventario
     * @return \Illuminate\Http\Response
     */
    public function show(Inventario $inventario)
    {
        $empleado= User::find($inventario->idEmpleado);
        $receta= Receta::find($inventario->idReceta);
      
        $id=$inventario->idReceta;

        $materias = DB::select(DB::raw(
            "select materia_primas.id,materia_primas.nombre, materia_recetas.cantidad
            from recetas, materia_recetas, materia_primas
            where recetas.id= materia_recetas.idReceta and materia_primas.id= materia_recetas.idMateria and recetas.id= $id"
        ));

        return view('inventario.view')->with('empleado', $empleado)->with('inventario', $inventario)->with('materias', $materias)->with('receta', $receta);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Inventario  $inventario
     * @return \Illuminate\Http\Response
     */
    

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Inventario  $inventario
     * @return \Illuminate\Http\Response
     */
    public function destroy(Inventario $inventario)
    {
        $id=$inventario->idReceta;
        $materia = DB::select(DB::raw("select materia_primas.id, materia_recetas.cantidad
        from recetas, materia_recetas, materia_primas
        where recetas.id= materia_recetas.idReceta and materia_primas.id= materia_recetas.idMateria and recetas.id= $id"));
        
        foreach ($materia as $m) {
            $mat= MateriaPrima::find($m->id);
            $mat->cantidad = $mat->cantidad + ($m->cantidad*$inventario->porciones);
            $mat->save();
        } 
        $inventario->estado= false;
        $inventario->save();
       
        return redirect()->route('index.inventario');
    }
    public function finish(Request $request,Inventario $inventario){
        $receta= Receta::find($inventario->idReceta);
        $cantidad= ($receta->cantidadProducto * $inventario->porciones)- $request->perdida ;
        
        $time = Carbon::now();
        $fecha =$time->day .'-' .$time->month.'-' .$time->year;
        $id= $receta->idProducto;
        $producto = DB::select(DB::raw(
            "select stock_productos.id, count(productos.id) as cantidad
            from productos, stock_productos
            where productos.id=$id and stock_productos.fecha='$fecha'
            group by stock_productos.id"
        ));
        
        if (!isset($producto[0])){
            StockProducto::create(['fecha'=>$fecha, 'idProducto'=> $id, 'cantidad'=>$cantidad]);
            
        }else{
            $stock= StockProducto::find($producto[0]->id);
            $stock->cantidad =$stock->cantidad + $cantidad;
            $stock->save();
        }
        
        $inventario->state = true;
        $inventario->save();
    }
}
