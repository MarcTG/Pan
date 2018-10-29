@extends('layouts.app')

@section('content')

    <div class="row">
            <div class="col-lg-6">
                    <a href="{{route('create.medida')}}" class="btn btn-primary ">Crear nueva medida</a>
                        <table class="table">
                            <thead class="thead-light">
                            <tr>
                                
                                <th>Nombre</th>
                                <th>Abreviatura</th>
                            </tr>
                            </thead>
                            <tbody>
                                @foreach ($medidas as $medida)
                                    <tr>
                                        
                                        <td>{{$medida->nombre}}</td>
                                        <td>{{$medida->abreviatura}}</td>
                                        <td class="text-center">
                                                <div class="dropdown">
                                                    <a class="more-link" data-toggle="dropdown" href="#/"><i class="icon-dot-3 ellipsis-icon"></i></a>
                                                    <ul class="dropdown-menu dropdown-menu-right">
                                                            <li><a href="{{route('edit.medida', $medida)}}">Editar</a></li>
                                                            <li><a href="{{route('delete.medida', $medida)}}">Eliminar</a></li>    
                                                    </ul>
                                                </div>
                                            </td>
                                    </tr> 
                                @endforeach
                            
                            
                            </tbody>
                        </table>
            </div>    
    </div>


@endsection