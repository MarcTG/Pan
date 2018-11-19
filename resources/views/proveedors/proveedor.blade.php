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
                    <h3 class="panel-title">Proveedores</h3>
                    @can('create.proveedor')
                    <a href="{{route('create.proveedor')}}" class="btn btn-sm btn-success pull-right ">Nuevo</a>                    
                    @endcan 
                    
                </div>
                <div class="panel-body">
                    <div class="table-responsive">
                        <table class="table table-striped table-bordered table-hover dataTables-example" >
                            <thead>
                                <tr>
                                        <th>Nombre</th>
                                        <th>Direccion</th>
                                        <th>Telefono</th>
                                        <th>Accion</th>
                                    
                                </tr>
                            </thead>
                            <tbody>
                                    @foreach ($proveedors as $proveedor)
                                    <tr>
                                        
                                        <td>{{$proveedor->Nombre}}</td>
                                        <td>{{$proveedor->Direccion}}</td>
                                        <td>{{$proveedor->telefono}}</td>

                                        <td>

                                         @can('edit.proveedor')
                                         <a class="btn btn-sm btn-primary" href="{{route('edit.proveedor', $proveedor)}}">Editar</a>    
                                         @endcan 

                                         @can('delete.proveedor')
                                         <a class="btn btn-sm btn-danger" href="{{route('delete.proveedor', $proveedor)}}">Eliminar</a>   
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