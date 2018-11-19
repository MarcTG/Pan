@extends('layouts.app')

@section('content')


<div class="col-lg-12">
        @if (session('info'))
        <div class="alert alert-success" role="alert">
                {{session('info')}}
        </div>
        @endif
        <div class="panel panel-primary ">
            <div class="panel-heading clearfix">
                <h3 class="panel-title">Comprobantes</h3>
                <a href="{{route('create.comprobante')}}" class="btn btn-sm btn-success pull-right ">Nuevo</a>
            </div>
            <div class="panel-body">
                <div class="table-responsive">
                    <table class="table table-striped table-bordered table-hover dataTables-example" >
                        <thead>
                            <tr>
                                    <th>Fecha</th>
                                    <th>Proveedor</th>
                                    <th>Empleado</th>
                                    <th>Total</th>
                                    <th>Accion</th>
                                
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
        </div>
    </div>  



@endsection