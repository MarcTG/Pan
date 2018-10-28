@extends('layouts.app')

@section('content')
<div class="row">
    <div class="col-md-4 col-md-offset-4">
        <div class="panel panel-default">
            <div class="panel-heading">
                  
                    
                  
                <h1 class="panel-body">Bienvenido {{ auth()->user()->nombre}}</h1>
            </div>
            <div>
                <form action="{{ route('logout')}}" method="POST">
                    @csrf
                    <button type="submit" class="btn btn-danger">Cerrar session</button>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection