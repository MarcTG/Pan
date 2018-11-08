@extends('layouts.app')

@section('content')
<div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">{{ __('Register') }}</div>
    
                    <div class="card-body">
                        <form method="POST" action="{{ route('store.user') }}">
                            @csrf

                            <div class="form-group row">
                                <label for="id" class="col-md-4 col-form-label text-md-right">{{ __('CI') }}</label>
                                <div class="col-md-6">
                                    
                                    <input type="text" class="form-control" name='id' placeholder="CI" required autofocus>
                                </div>
                                
                            </div>

                            <div class="form-group row">
                                <label for="nombre" class="col-md-4 col-form-label text-md-right">{{ __('Nombre') }}</label>
    
                                <div class="col-md-6">
                                    <input id="nombre" type="text" class="form-control{{ $errors->has('nombre') ? ' is-invalid' : '' }}" name="nombre" value="{{ old('nombre') }}" required >
    
                                    @if ($errors->has('nombre'))
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $errors->first('nombre') }}</strong>
                                        </span>
                                    @endif
                                </div>
                            </div>
                            
                            <div class="form-group row">

                                <label for="apellidoP" class="col-md-4 col-form-label text-md-right">{{ __('Apellido Paterno') }}</label>

                                <div class="col-md-6">
                                    
                                    <input type="text" class="form-control" name="apellidoP" placeholder="Apellido Paterno">
                                </div>
                                    
                            </div>
                            <div class="form-group row">

                                    <label for="apellidoM" class="col-md-4 col-form-label text-md-right">{{ __('Apellido Materno') }}</label>
    
                                    <div class="col-md-6">
                                        
                                        <input type="text" class="form-control" name="apellidoM" placeholder="Apellido Materno">
                                    </div>
                                        
                                </div>
                            <div class="form-group row">
                                
                                <label for="telefono" class="col-md-4 col-form-label text-md-right">{{ __('Telefono') }}</label>

                                <div class="col-md-6">
                                    
                                    <input type="tel" class="form-control" name="telefono" placeholder="Telefono">
                                </div>
                                        
                            </div>
                            <div class="form-group row"> 
                                    <label class="col-sm-4 control-label">Role</label> 
                                    <div class="col-sm-6"> 
                                        <select class="select2 form-control" name="rol">
                                            @foreach ($roles as $role)
                                                <option value="{{$role->id}}"  >{{$role->name}}</option>
                                            @endforeach
                                            
                                        </select>
                                    </div> 
                                </div>
                            
                            
    
                            <div class="form-group row">
                                <label for="password" class="col-md-4 col-form-label text-md-right">{{ __('Contraseña') }}</label>
    
                                <div class="col-md-6">
                                    <input id="password" type="password" class="form-control{{ $errors->has('password') ? ' is-invalid' : '' }}" name="password" required>
    
                                    @if ($errors->has('password'))
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $errors->first('password') }}</strong>
                                        </span>
                                    @endif
                                </div>
                            </div>
    
                            <div class="form-group row">
                                <label for="password-confirm" class="col-md-4 col-form-label text-md-right">{{ __('Confirmar contraseña') }}</label>
    
                                <div class="col-md-6">
                                    <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required>
                                </div>
                            </div>
    
                            <div class="form-group row mb-0">
                                <div class="col-md-6 offset-md-4">
                                    <button type="submit" class="btn btn-primary">
                                        {{ __('Register') }}
                                    </button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection