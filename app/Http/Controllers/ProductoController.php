<?php

namespace App\Http\Controllers;

use App\Producto;
use Illuminate\Http\Request;
use Carbon\Carbon;
use Illuminate\Support\Facades\DB;

class ProductoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {   $time = Carbon::now();
        $fecha =$time->day .'-' .$time->month.'-' .$time->year;
        
        $productos =DB::table('productos')
            ->join('stock_productos', 'stock_productos.idProducto', '=', 'productos.id')
            ->select('productos.id','productos.nombre','productos.precio', 'stock_productos.cantidad','stock_productos.vendido'  )
            
            ->where('estado', true)
            ->get();
            dd($productos);

        return view('productos.index')->with('productos', Producto::all()->where('estado', true)); 
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {   
        return view('productos.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        
        $producto = Producto::create($request->all());
        return redirect()->route('index.productos');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Producto  $producto
     * @return \Illuminate\Http\Response
     */
    public function show(Producto $producto)
    {
        return view('productos.view')->with('producto', $producto);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Producto  $producto
     * @return \Illuminate\Http\Response
     */
    public function edit(Producto $producto)
    {
        return view('productos.edit')->with('producto', $producto);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Producto  $producto
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Producto $producto)
    {
        
        $producto->update($request->all());
        
        return redirect()->route('index.productos');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Producto  $producto
     * @return \Illuminate\Http\Response
    */
    public function destroy(Producto $producto)
    {
        $producto->estado= false;

        $producto->save();

        return redirect()->back();
    }
}
