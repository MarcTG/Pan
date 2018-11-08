@extends('layouts.app')

@section('content')
<div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="panel panel-default">
                    <div class="panel-heading">Rol</div>
    
                    <div class="panel-body">                                        
                        <p><strong>Nombre</strong>     {{ $role->name }}</p>
                        <p><strong>Slug</strong>       {{ $role->slug }}</p>
                        <p><strong>Descripción</strong>  {{ $role->description }}</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection