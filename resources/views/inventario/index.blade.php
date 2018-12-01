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
                <h3 class="panel-title">Salida de inventario</h3>
                <a href="{{route('create.inventario')}}" class="btn btn-sm btn-success pull-right ">Nuevo</a>
            </div>
            <div class="panel-body">
                <div class="table-responsive">
                    <table class="table table-striped table-bordered table-hover dataTables-example" >
                        <thead>
                            <tr>
                                    <th>Fecha</th>
                                    <th>Hora</th>
                                    <th>Receta</th>
                                    <th>Porcion(es)</th>
                                    <th>Empleado</th>
                                    <th>Estado</th>
                                    <th>Acciones</th>
                            </tr>
                        </thead>
                        <tbody>
                                @foreach ($items as $item)
                            <tr>
                                <td>{{date("d/m/Y", strtotime(substr($item->fecha,0,11)))}}</td>
                                <td>{{substr($item->fecha,11)}}</td>
                                <td>{{$item->receta}}</td>
                                <td>{{$item->porciones}}</td>
                                <td>{{$item->nombre}}</td>
                                @if ($item->state)
                                    <td><span  class="badge badge-success" style="background: green">Terminado</span> </td>
                                @else
                                    <td ><span class="badge badge-warning" style="background: yellow">En proceso</span></td>
                                @endif
                                
                                <td>
                                    <a class="btn btn-sm btn-primary" href="{{route('show.inventario', $item->id)}}">Ver</a>
                                </td>
                            </tr> 
                            @endforeach
                        </tbody>
                        
                    </table>
                </div>
            </div>
        </div>
    </div>  



@endsection