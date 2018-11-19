<?php

namespace App\Http\Controllers;
use App\Medida;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Auth;
use App\bitacora;
class MedidaController extends Controller
{
    public function index()
    {
        
        return view('medidas.medida')->with('medidas',Medida::all()->where('estado', true));
    }

    public function create()
    {
        return view('medidas.create');
    }

    public function destroy(Medida $medida)
    {
        $medida->estado = false;
        $medida->save();
        $bitacora=['usuario' => auth()->user()->nombre , 'accion' => 'Eliminar', 'tabla' => 'Medida', 'idTabla' => $medida->id  ];
        bitacora::create($bitacora);

        return redirect()->back()->with('info', 'Eliminado con éxito');
    }

    public function edit(Medida $medida)
    {
        return view('medidas.edit')->with('medida', $medida);
    }

    public function update(Request $request, Medida $medida)
    {
        $this->validate($request, [
            
            'nombre' => 'required|string|max:255',
            'abreviatura' => 'required|string|max:255',
            
        ]);

        $medida->nombre=$request->nombre;
        $medida->abreviatura=$request->abreviatura;
        $medida->save();

        $bitacora=['usuario' => auth()->user()->nombre , 'accion' => 'Editar', 'tabla' => 'Medida', 'idTabla' => $medida->id  ];
        bitacora::create($bitacora);
        
        return redirect()->route('view.medidas')->with('info', 'Actualizado con éxito');
    }

    public function store(Request $request)
    {
        $this->validate($request, [
            
            'nombre' => 'required|string|max:255',
            'abreviatura' => 'required|string|max:255',
            
        ]);
        $medida= new Medida;
        $medida->nombre=$request->nombre;
        $medida->abreviatura=$request->abreviatura;
        $medida->save();

        $bitacora=['usuario' => auth()->user()->nombre , 'accion' => 'Crear', 'tabla' => 'Medida', 'idTabla' => $medida->id  ];
        bitacora::create($bitacora);

        return redirect()->route('view.medidas')->with('info', 'Guardado con éxito');
    }
}
