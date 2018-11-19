@extends('layouts.app')

@section('content')


<div class="col-lg-12">
        
        @if (session('info'))
            <div class="alert alert-success" role="alert">
                    {{session('info')}}
            </div>
        @endif
        <div class="panel panel-primary ">
            <div class="panel-heading clearfix">
                <h3 class="panel-title">Roles</h3>
                @can('create.role')
                        <a href="{{ route('create.role') }}" 
                        class="btn btn-sm btn-success pull-right">
                            Crear
                        </a>
                        @endcan
            </div>
            <div class="panel-body">
                <div class="table-responsive">
                    <table class="table table-striped table-bordered table-hover dataTables-example" >
                        <thead>
                            <tr>
                                    <th width="10px">ID</th>
                                    <th>Nombre</th>
                                    <th>Accion</th>
                                
                            </tr>
                        </thead>
                        <tbody>
                                @foreach($roles as $role)
                                <tr>
                                    <td>{{ $role->id }}</td>
                                    <td>{{ $role->name }}</td>
                                    <td>
                                    @can('roles.edit')
                                    
                                        <a href="{{ route('roles.edit', $role->id) }}" 
                                        class="btn btn-sm btn-primary">
                                            editar
                                        </a>
                                    
                                    @endcan
                                    @can('destroy.role')
                                    
                                        {!! Form::open(['route' => ['destroy.role', $role->id], 
                                        'method' => 'DELETE']) !!}
                                            <button class="btn btn-sm btn-danger">
                                                Eliminar
                                            </button>
                                        {!! Form::close() !!}
                                    </td>
                                    @endcan
                                </tr>
                                @endforeach
                        </tbody>
                        
                    </table>
                    {{ $roles->render() }}
                </div>
            </div>
        </div>
    </div>


@endsection