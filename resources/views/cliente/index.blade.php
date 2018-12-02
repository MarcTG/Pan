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
                        <a href="{{Route('create.cliente')}}" class="btn btn-sm btn-success pull-right">Nuevo Cliente</a>    
                    @endcan
                    
                </div>
                <div class="panel-body">
                    <div class="table-responsive">
                        <table class="table table-striped table-bordered table-hover dataTables-example" >
                            <thead>
                                <tr>
                                        <th>NIT</th>
                                        <th>Nombre</th>
                                        <th>Accion</th>
                                    
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($clientes as $cliente)
                                    <tr>
                                        <th scope="row">{{$cliente->nit}}</th>

                                        <td>{{$cliente->nombre.' '.$cliente->apellidoP.' '.$cliente->apellidoM}}</td>

                                        

                                        <td>
                                            @can('edit.user')
                                                <a class="btn btn-sm btn-primary" href="{{route('edit.cliente', $cliente)}}">Editar</a>
                                            @endcan
                                            
                                            @can('delete.user')
                                            <!-- FALTA EDITAR LOS PERMISOS -->

                                                <a class="btn btn-sm btn-danger" href="{{route('delete.cliente', $cliente)}}">Eliminar</a>                 
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