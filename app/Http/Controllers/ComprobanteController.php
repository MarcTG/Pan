<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Detalle_compra;
use App\Proveedor;
use App\User;
use App\Comprobante;
use App\MateriaPrima;
use Illuminate\Support\Facades\DB;
use Auth;
use App\bitacora;
class ComprobanteController extends Controller
{
    public function index(){
        $comprobantes = DB::table('Comprobantes')
            ->where('estado', 1)
            ->orderBy('fecha','desc')
            ->get();
            
        $comprobantes->toArray();
        
        for ($i=0; $i<count($comprobantes); $i++ )
        {
            
            $comprobantes[$i]->idProveedor=Proveedor::find($comprobantes[$i]->idProveedor)->Nombre;
            $empleado=User::find($comprobantes[$i]->idEmpleado);
            $comprobantes[$i]->idEmpleado=$empleado->nombre . ' '. $empleado->apellidoP . ' ' . $empleado->apellidoM ;
        }
        return view('comprobantes.index')->with('comprobantes', $comprobantes);
    }

    public function create(){
       
        return view('comprobantes.create')->with('proveedores', Proveedor::all()->where('estado', true))->with('materias', MateriaPrima::all()->where('estado', true));
    
    }

    public function store(Request $request)
    {
        
        $comprobante = new Comprobante;
        $comprobante->idProveedor = $request->proveedor;
        $comprobante->idEmpleado = auth()->user()->id;
        $comprobante->fecha = $request->fecha;
        $comprobante->total = $request->total;
        $comprobante->save();

        for ($i=1; $i < count($request->cantidad); $i++) { 
            $detalle = new Detalle_compra();
            $detalle->idComprobante = $comprobante->id;
            $detalle->idMateria = $request->idMateria[$i];
            $detalle->cantidad = $request->cantidad[$i];
            $detalle->precio = $request->precio[$i];
            $detalle->save();
            $materia = MateriaPrima::find($request->idMateria[$i]);
            $materia->addCantidad(intval($request->cantidad[$i]));
            
        }

        $bitacora=['usuario' => auth()->user()->nombre , 'accion' => 'Crear Comprobante', 'tabla' => 'Comprobante', 'idTabla' => $comprobante->id  ];
        bitacora::create($bitacora);

        return redirect()->route('index.comprobante')->with('info', 'Guardado con éxito');
    }
    public function view($id){
        $comprobante=Comprobante::find($id);
        $usuario = User::find($comprobante->idEmpleado);
        $proveedor= Proveedor::find($comprobante->idProveedor);
        
        $detalles = DB::table('detalle_compras')
            ->join('comprobantes', 'detalle_compras.idComprobante', '=', 'comprobantes.id')
            ->join('materia_primas', 'materia_primas.id', '=', 'detalle_compras.idMateria')
            ->select('materia_primas.nombre', 'detalle_compras.precio' , 'detalle_compras.cantidad')
            ->where('comprobantes.id', '=', $comprobante->id)
            ->get();
            
        $comprobante->idEmpleado=$usuario->nombre.' '.$usuario->apellidoP.' '.$usuario->apellidoM;
        $comprobante->idProveedor=$proveedor->Nombre;
        
        return view('comprobantes.view')->with('comprobante',$comprobante)->with('detalles', $detalles);
    }

    public function destroy($id){
        $comprobante=Comprobante::find($id);
        $comprobante->estado = 0;
        $comprobante->save();

        $detalles= Detalle_compra::all()->where('idComprobante', $id );
        foreach ($detalles as $detalle) {
            $materia= MateriaPrima::find($detalle->idMateria);
            $materia->cantidad = $materia->cantidad - $detalle->cantidad;
            $materia->save();
        }

        $bitacora=['usuario' => auth()->user()->nombre , 'accion' => 'Anular Comprobante', 'tabla' => 'Comprobante', 'idTabla' => $comprobante->id  ];
        bitacora::create($bitacora);
        return redirect()->route('index.comprobante')->with('info', 'Anulado con éxito');
    }
}
