@extends('layouts.app')

@section('content')

<div class="row">
    <div class="col-lg-6">
            <a href="{{route('create.comprobante')}}" class="btn btn-primary ">Crear nueva medida</a>
                <table class="table">
                    <thead class="thead-light">
                    <tr>
                        
                        <th>Fecha</th>
                        <th>Proveedor</th>
                        <th>Empleado</th>
                        <th>Total</th>
                    </tr>
                    </thead>
                    <tbody>
                        @foreach ($comprobantes as $comprobante)
                            <tr>
                                <td>{{$comprobante->fecha}}</td>
                                <td>{{$comprobante->idProveedor}}</td>
                                <td>{{$comprobante->idEmpleado}}</td>
                                <td>{{$comprobante->total}}</td>
                                
                                <td><a class="btn btn-success" href="{{route('view.comprobante', $comprobante->id)}}">Ver Detalles</a></td>
                            </tr> 
                        @endforeach
                    
                    
                    </tbody>
                </table>
    </div>    
</div>  



@endsection