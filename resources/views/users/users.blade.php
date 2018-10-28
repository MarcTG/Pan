@extends('layouts.app')

@section('content')
    <a href="{{Route('create.user')}}" class="btn btn-primary">Crear Usuario</a>
    <table class="table">
        <thead class="thead-light">
        <tr>
            <th>ID</th>
            <th>Nombre</th>
            <th>Email</th>
        </tr>
        </thead>
        <tbody>
            @foreach ($users as $user)
                <tr>
                    <th scope="row">{{$user->id}}</th>
                    <td>{{$user->name}}</td>
                    <td>{{$user->email}}</td>
                </tr> 
            @endforeach
        
        
        </tbody>
    </table>
@endsection