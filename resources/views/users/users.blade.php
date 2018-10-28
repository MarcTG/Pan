@extends('layouts.app')

@section('content')
    <a href="{{Route('create.user')}}" class="btn btn-primary">Crear Usuario</a>
    <table class="table">
        <thead class="thead-light">
        <tr>
            <th>ID</th>
            <th>Nombre</th>
            <th>Telefono</th>
        </tr>
        </thead>
        <tbody>
            @foreach ($users as $user)
                <tr>
                    <th scope="row">{{$user->id}}</th>
                    <td>{{$user->nombre.' '.$user->apellidoP.' '.$user->apellidoM}}</td>
                    <td>{{$user->telefono}}</td>
                    <td class="text-center">
                            <div class="dropdown">
                                <a class="more-link" data-toggle="dropdown" href="#/"><i class="icon-dot-3 ellipsis-icon"></i></a>
                                <ul class="dropdown-menu dropdown-menu-right">
                                    <li><a href="{{route('edit.user', $user)}}">Editar</a></li>
                                    <li><a href="{{route('delete.user', $user)}}">Eliminar</a></li>
                                    
                                </ul>
                            </div>
                        </td>
                </tr> 
            @endforeach
        
        
        </tbody>
    </table>
@endsection