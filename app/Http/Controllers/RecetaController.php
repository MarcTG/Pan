<?php

namespace App\Http\Controllers;

use App\Receta;
use Illuminate\Http\Request;
use App\MateriaReceta;
use App\Producto;
use App\MateriaPrima;
use App\Medida;
use Illuminate\Support\Facades\DB;

class RecetaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('recetas.index')->with('recetas', Receta::all()->where('estado', true));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {   
        $materias = DB::table('materia_primas')
            ->join('medidas', 'materia_primas.medida_id', '=', 'medidas.id')
            ->select('materia_primas.id','materia_primas.nombre', 'medidas.abreviatura' )
            ->where('materia_primas.estado', '=', true)
            ->get();

        return view('recetas.create')
        ->with('materias', $materias)
        ->with('productos', Producto::all()->where('estado', true));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        
        $receta = new Receta;
        $receta->nombre = $request->nombre;
        $receta->cantidadProducto = $request->cant;
        $receta->descripcion = $request->descripcion;
        $receta->idProducto = $request->idProducto;
        $receta->save();

        for ($i=1; $i < count($request->cantidad); $i++) { 
            $var = new MateriaReceta;
            $var->cantidad = $request->cantidad[$i];
            $var->idReceta = $receta->id;
            $var->idMateria = $request->idMateria[$i];
            $var->save(); 
        }

        return redirect()->route('index.receta');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Receta  $receta
     * @return \Illuminate\Http\Response
     */
    public function show(Receta $receta)
    {
        
        $materia = DB::select(DB::raw("select medidas.abreviatura, materia_primas.nombre, materia_recetas.cantidad from medidas, materia_primas, materia_recetas, recetas
        where medidas.id = materia_primas.medida_id and  materia_recetas.idMateria= materia_primas.id
                and materia_recetas.idReceta= recetas.id"));
        
        return view('recetas.view')->with('receta', $receta)->with('materias', $materia);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Receta  $receta
     * @return \Illuminate\Http\Response
     */
    public function edit(Receta $receta)
    {
        
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Receta  $receta
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Receta $receta)
    {
        
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Receta  $receta
     * @return \Illuminate\Http\Response
     */
    public function destroy(Receta $receta)
    {
        $receta->estado = false;
        $receta->save();
        
        return redirect()->route('index.receta');
    }
}
