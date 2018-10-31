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
                                <th>Cantidad</th>
                            </tr>
                            </thead>
                            <tbody>
                                @foreach ($materia_primas as $materia_prima)
                                    <tr>
                                        <td>{{$materia_prima['nombre']}}</td>
                                        <td>{{$materia_prima['medida_id']}}</td>
                                        <td>{{$materia_prima['cantidad']}}</td>                              
                                        <td><a class="btn btn-primary" href="{{route('edit.materia_prima', $materia_prima)}}">Editar</a>
                                        <a class="btn btn-danger" href="{{route('delete.materia_prima', $materia_prima)}}">Eliminar</a></td>
                                    </tr> 
                                @endforeach
                            
                            
                            </tbody>
                        </table>
            </div>    
    </div>


@endsection