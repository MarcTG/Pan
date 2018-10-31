@extends('layouts.app')

@section('content')

    <div class="row">
            <div class="col-lg-6">
                    <a href="{{route('create.proveedor')}}" class="btn btn-primary ">Crear nueva Proveedor</a>
                        <table class="table">
                            <thead class="thead-light">
                            <tr>
                                
                                <th>Nombre</th>
                                <th>Direccion</th>
                                <th>Telefono</th>
                            </tr>
                            </thead>
                            <tbody>
                                
                                @foreach ($proveedors as $proveedor)
                                    <tr>
                                        
                                        <td>{{$proveedor->Nombre}}</td>
                                        <td>{{$proveedor->Direccion}}</td>
                                        <td>{{$proveedor->Telefono}}</td>
                                        <td><a class="btn btn-primary" href="{{route('edit.proveedor', $proveedor)}}">Editar</a>                   
                                        <a class="btn btn-danger" href="{{route('delete.proveedor', $proveedor)}}">Eliminar</a></td>                        
                                        
                                    </tr> 
                                @endforeach
                            
                            
                            </tbody>
                        </table>
            </div>    
    </div>

    

@endsection