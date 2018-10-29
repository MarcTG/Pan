<?php

namespace App\Http\Controllers;
use App\Medida;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class MedidaController extends Controller
{
    public function index()
    {
        return view('medidas.medida')->with('medidas',Medida::all());
    }

    public function create()
    {
        return view('medidas.create');
    }

    public function destroy(Medida $medida)
    {
        $medida->delete();
        return redirect()->back();
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
        return redirect()->route('view.medidas');
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
        return redirect()->route('view.medidas');
    }
}
