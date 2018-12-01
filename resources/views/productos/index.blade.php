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
                <h3 class="panel-title">Productos</h3>
                <a href="{{route('create.producto')}}" class="btn btn-sm btn-success pull-right ">Nuevo</a>
            </div>
            <div class="panel-body">
                <div class="table-responsive">
                    <table class="table table-striped table-bordered table-hover dataTables-example" >
                        <thead>
                            <tr>
                                    <th>Nombre</th>
                                    <th>Cantidad</th>
                                    <th>Accion</th>
                            </tr>
                        </thead>
                        <tbody>
                                @foreach ($productos as $producto)
                            <tr>
                                <td>{{$producto->nombre}}</td>
                                <td>{{$producto->cantidad}}</td>
                                
                                
                                <td>
                                    <a class="btn btn-sm btn-info" href="{{route('show.productos', $producto)}}">Ver</a>
                                    <a class="btn btn-sm btn-primary" href="{{route('edit.producto', $producto)}}">Editar</a>
                                    <a class="btn btn-sm btn-danger" href="{{route('delete.producto', $producto)}}">Eliminar</a>
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