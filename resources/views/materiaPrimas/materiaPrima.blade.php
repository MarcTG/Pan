@extends('layouts.app')

@section('content')

    <div class="row">
            <div class="col-lg-6">
                    <a href="{{route('create.materia_prima')}}" class="btn btn-primary ">Crear nueva materia_prima</a>
                        <table class="table">
                            <thead class="thead-light">
                            <tr>
                                
                                <th>Nombre</th>
                                <th>Abreviatura</th>
                            </tr>
                            </thead>
                            <tbody>
                                @foreach ($materia_primas as $materia_prima)
                                    <tr>
                                        @php
                                            
                                        @endphp
                                        <td>{{$materia_prima['nombre']}}</td>
                                        <td>{{$materia_prima['medida_id']}}</td>
                                        <td class="text-center">
                                                <div class="dropdown">
                                                    <a class="more-link" data-toggle="dropdown" href="#/"><i class="icon-dot-3 ellipsis-icon"></i></a>
                                                    <ul class="dropdown-menu dropdown-menu-right">
                                                            <li><a href="{{route('edit.materia_prima', $materia_prima)}}">Editar</a></li>
                                                            <li><a href="{{route('delete.materia_prima', $materia_prima)}}">Eliminar</a></li>    
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