@extends('layouts.app')

@section('content')


<div class="row">
        
    
        <form class="form" action="reflect.php">
          
          
        </form>
    </div>


<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
                <div class="panel panel-default">
                        <div class="panel-heading">Roles</div>
        
                        <div class="panel-body">                    
                            {{ Form::open(['route' => 'store.role']) }}
        
                                @include('roles.partials.form')
                                
                            {{ Form::close() }}
                        </div>
                    </div>
        </div>
    </div>
</div>
@endsection