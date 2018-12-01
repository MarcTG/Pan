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
                <h3 class="panel-title">Recetas</h3>
                <a href="{{route('create.receta')}}" class="btn btn-sm btn-success pull-right ">Nuevo</a>
            </div>
            <div class="panel-body">
                <div class="table-responsive">
                    <table class="table table-striped table-bordered table-hover dataTables-example" >
                        <thead>
                            <tr>
                                    <th>Nombre</th>
                                    <th>Accion</th>
                            </tr>
                        </thead>
                        <tbody>
                                @foreach ($recetas as $receta)
                            <tr>
                                <td>{{$receta->nombre}}</td>
                                <td>
                                    <a class="btn btn-sm btn-info" href="{{route('show.receta', $receta)}}">Ver</a>
                                    <a class="btn btn-sm btn-primary" href="{{route('edit.receta', $receta)}}">Editar</a>
                                    <a class="btn btn-sm btn-danger" href="{{route('delete.receta', $receta)}}">Eliminar</a>
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