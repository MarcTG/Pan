<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Proveedor;
use Auth;
use App\bitacora;

class ProveedorController extends Controller
{
    public function index()
    {
        return view('proveedors.proveedor')->with('proveedors', Proveedor::all()->where('estado', true));
    }

    public function create()
    {
        return view('proveedors.create');
    }

    public function destroy(Proveedor $proveedor)
    {
        $bitacora=['usuario' => auth()->user()->nombre , 'accion' => 'Eliminar', 'tabla' => 'Proveedor', 'idTabla' => $proveedor->id  ];
        bitacora::create($bitacora);

        $proveedor->estado = false;
        $proveedor->save();
        return redirect()->back()->with('info', 'Eliminado con éxito');
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

        $bitacora=['usuario' => auth()->user()->nombre , 'accion' => 'Editar', 'tabla' => 'Proveedor', 'idTabla' => $proveedor->id  ];
        bitacora::create($bitacora);

        return redirect()->route('view.proveedors')->with('info', 'Actualizado con éxito');
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

        $bitacora=['usuario' => auth()->user()->nombre , 'accion' => 'Crear', 'tabla' => 'Proveedor', 'idTabla' => $proveedor->id  ];
        bitacora::create($bitacora);

        return redirect()->route('view.proveedors')->with('info', 'Creado con éxito');
    }    
}
