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
                        <div class="panel panel-default">
                            <div class="panel-heading clearfix">
                                <h3 class="panel-title">Striped Rows</h3>
                                <ul class="panel-tool-options"> 
                                    <li><a data-rel="collapse" href="#"><i class="icon-down-open"></i></a></li>
                                    <li><a data-rel="reload" href="#"><i class="icon-arrows-ccw"></i></a></li>
                                    <li><a data-rel="close" href="#"><i class="icon-cancel"></i></a></li>
                                </ul>
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
            </div>
       </div>
@endsection