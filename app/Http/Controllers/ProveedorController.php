<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Proveedor;
class ProveedorController extends Controller
{
    public function index()
    {
        return view('proveedors.proveedor')->with('proveedors', Proveedor::all());
    }

    public function create()
    {
        return view('proveedors.create');
    }

    public function destroy(Proveedor $proveedor)
    {
        
        $proveedor->delete();
        return redirect()->back();
    }

    public function edit(Proveedor $proveedor)
    {
        return view('proveedors.edit')->with('proveedor', $proveedor);
    }

    public function update(Request $request, Proveedor $proveedor)
    {
        $this->validate($request, [
            
            'nombre' => 'required|string|max:255',
            'direccion' => 'required|string|max:255',
            'telefono' => 'required|string|max:10',
            
        ]);

        $proveedor->nombre=$request->nombre;
        $proveedor->direccion=$request->direccion;
        $proveedor->telefono=$request->telefono;
        
        $proveedor->save();
        return redirect()->route('view.proveedors');
    }

    public function store(Request $request)
    {
        $this->validate($request, [
            
            'nombre' => 'required|string|max:255',
            'direccion' => 'required|string|max:255',
            'telefono' => 'required|string|max:10',
            
        ]);
        $proveedor=new Proveedor;    
        $proveedor->nombre=$request->nombre;
        $proveedor->direccion=$request->direccion;
        $proveedor->telefono=$request->telefono;
        
        $proveedor->save();
        return redirect()->route('view.proveedors');
    }    
}
