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
                    <h3 class="panel-title">Empleados</h3>
                    @can('create.user')
                        <a href="{{Route('create.user')}}" class="btn btn-sm btn-success pull-right">Nuevo Empleado</a>    
                    @endcan
                    
                </div>
                <div class="panel-body">
                    <div class="table-responsive">
                        <table class="table table-striped table-bordered table-hover dataTables-example" >
                            <thead>
                                <tr>
                                        <th>ID</th>
                                        <th>Nombre</th>
                                        <th>Telefono</th>
                                        <th>Accion</th>
                                    
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($users as $user)
                                    <tr>
                                        <th scope="row">{{$user->id}}</th>

                                        <td>{{$user->nombre.' '.$user->apellidoP.' '.$user->apellidoM}}</td>

                                        <td>{{$user->telefono}}</td>

                                        <td>
                                            @can('edit.user')
                                                <a class="btn btn-sm btn-primary" href="{{route('edit.user', $user)}}">Editar</a>
                                            @endcan
                                            
                                            @can('delete.user')
                                            <!-- Button trigger modal -->

                                                <a class="btn btn-sm btn-danger" href="{{route('delete.user', $user)}}">Eliminar</a>                 
                                            @endcan
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