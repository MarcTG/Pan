<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\MateriaPrima;
use App\Medida;
use Auth;
use App\bitacora;

class MateriaPrimaController extends Controller
{
    public function index()
    {   
        
        $materiaPrima=MateriaPrima::all()->where('estado', true)->toArray();
        
        foreach ($materiaPrima as &$Materia) {
            $Materia['medida_id']=Medida::find($Materia['medida_id'])->nombre;
        }
            
        
       
        return view('materiaPrimas.materiaPrima')->with('materia_primas', $materiaPrima);
    }

    public function create()
    {
        return view('materiaPrimas.create')->with('medidas', Medida::all()->where('estado', true));
    }

    public function store(Request $request)
    {
       
        $this->validate($request, [
            
            'nombre' => 'required|string|max:255',
            'medida' => 'required|string|max:2',
            
        ]);
        $materiaPrima= new MateriaPrima;
        $materiaPrima->nombre=$request->nombre;
        $materiaPrima->medida_id=$request->medida;
        $materiaPrima->save();

        $bitacora=['usuario' => auth()->user()->nombre , 'accion' => 'Crear', 'tabla' => 'Materia Prima', 'idTabla' => $materiaPrima->id  ];
        bitacora::create($bitacora);

        return redirect()->route('view.materia_primas')->with('info', 'Creado con éxito');
    }

    public function destroy(MateriaPrima $materiaPrima)
    {
        $materiaPrima->estado = false;
        $materiaPrima->save();
        $bitacora=['usuario' => auth()->user()->nombre , 'accion' => 'Eliminar', 'tabla' => 'Materia Prima', 'idTabla' => $materiaPrima->id  ];
        bitacora::create($bitacora);

        return redirect()->back()->with('info', 'Eliminado con éxito');
    }

    public function edit(MateriaPrima $materiaPrima)
    {
        return view('materiaPrimas.edit')->with('materia', $materiaPrima)->with('medidas', Medida::all());
    }

    public function update(Request $request, MateriaPrima $materiaPrima)
    {
        $this->validate($request, [
            
            'nombre' => 'required|string|max:255',
            'medida' => 'required|string|max:2',
            
        ]);

        $materiaPrima->nombre=$request->nombre;
        $materiaPrima->medida_id=$request->medida;
        $materiaPrima->save();

        $bitacora=['usuario' => auth()->user()->nombre , 'accion' => 'Editar', 'tabla' => 'Materia Prima', 'idTabla' => $materiaPrima->id  ];
        bitacora::create($bitacora);

        return redirect()->route('view.materia_primas')->with('info', 'Editado con éxito');
    }

    
}
