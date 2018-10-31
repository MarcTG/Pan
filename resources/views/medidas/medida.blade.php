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
                                        <td><a class="btn btn-primary" href="{{route('edit.medida', $medida)}}">Editar</a>
                                        <a class="btn btn-danger" href="{{route('delete.medida', $medida)}}">Eliminar</a>  </td>                    
                                                             
                                        
                                    </tr> 
                                @endforeach
                            
                            
                            </tbody>
                        </table>
            </div>    
    </div>


@endsection