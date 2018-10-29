<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\MateriaPrima;
use App\Medida;
class MateriaPrimaController extends Controller
{
    public function index()
    {   
        $materiaPrima=MateriaPrima::all()->toArray();
        for ($i=0; $i<count($materiaPrima); $i++ ) {
            $materiaPrima[$i]['medida_id']=Medida::find($materiaPrima[$i]['medida_id'])->nombre;
        }
       
        return view('materiaPrimas.materiaPrima')->with('materia_primas', $materiaPrima);
    }

    public function create()
    {
        return view('materiaPrimas.create')->with('medidas', Medida::all());
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
        return redirect()->route('view.materia_primas');
    }

    public function destroy(MateriaPrima $materiaPrima)
    {
        $materiaPrima->delete();
        return redirect()->back();
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
        return redirect()->route('view.materia_primas');
    }

    
}
