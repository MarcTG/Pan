@extends('layouts.app')

@section('content')

       <div class="container">
            <div class="row">
                <div class="col-12">
                    <h4>Proveedor: {{$comprobante->idProveedor}} </h4>
                    <h4>Empleado: {{$comprobante->idEmpleado}} </h4>
                    <h4>Fecha: {{$comprobante->fecha}} </h4>
                    <h4>Total: {{$comprobante->total}} </h4>
                </div>
                <div class="">
                        <div class="panel panel-primary">
                            <div class="panel-heading clearfix">
                                <h3 class="panel-title">Striped Rows</h3>
                                
                            </div>
                            <div class="panel-body">
                                <div class="table-responsive">
                                    <table class="table table-striped">
                                        <thead> 
                                            <tr> 
                                                <th>Material</th> 
                                                <th>Precio</th> 
                                                <th>Cantidad</th> 
                                            </tr> 
                                        </thead> 
                                        <tbody>
                                            @foreach ($detalles as $detalle)
                                                <tr> 
                                                    <td>{{$detalle->nombre}}</td> 
                                                    <td>{{$detalle->precio}}</td> 
                                                    <td>{{$detalle->cantidad}}</td> 
                                                </tr> 
                                            @endforeach 
                                            
                                            
                                        </tbody> 
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                    <a class="btn btn-danger" href="{{route('delete.comprobante', $comprobante->id)}}">Anular</a>
            </div>
       </div>
@endsection