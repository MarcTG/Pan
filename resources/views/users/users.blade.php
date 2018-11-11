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
                    <td><a class="btn btn-primary" href="{{route('edit.user', $user)}}">Editar</a>
                    <a class="btn btn-danger" href="{{route('delete.user', $user)}}">Eliminar</a></td>                           
                </tr> 
            @endforeach
        
        
        </tbody>
    </table>
@endsection