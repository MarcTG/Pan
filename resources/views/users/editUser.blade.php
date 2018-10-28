@extends('layouts.app')

@section('content')
<div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">{{ __('Editar') }}</div>
    
                    <div class="card-body">
                        <form method="POST" action="{{ route('update.user', $user) }}">
                            @csrf

                            <div class="form-group row">
                                <label for="id" class="col-md-4 col-form-label text-md-right">{{ __('CI') }}</label>
                                <div class="col-md-6">
                                    
                                    <input type="text" class="form-control" name='id' placeholder="CI" required autofocus value="{{$user->id}}">
                                </div>
                                
                            </div>

                            <div class="form-group row">
                                <label for="nombre" class="col-md-4 col-form-label text-md-right">{{ __('nombre') }}</label>
    
                                <div class="col-md-6">
                                    <input value="{{$user->nombre}}" id="nombre" type="text" class="form-control{{ $errors->has('nombre') ? ' is-invalid' : '' }}" name="nombre" value="{{ old('nombre') }}" required >
    
                                    @if ($errors->has('nombre'))
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $errors->first('nombre') }}</strong>
                                        </span>
                                    @endif
                                </div>
                            </div>
                            
                            <div class="form-group row">

                                <label for="apellidoP" class="col-md-4 col-form-label text-md-right">{{ __('apellidoP') }}</label>

                                <div class="col-md-6">
                                    
                                    <input value="{{$user->apellidoP}}" type="text" class="form-control" name="apellidoP" placeholder="Apellido Paterno">
                                </div>
                                    
                            </div>
                            <div class="form-group row">

                                    <label for="apellidoM" class="col-md-4 col-form-label text-md-right">{{ __('apellidoM') }}</label>
    
                                    <div class="col-md-6">
                                        
                                        <input value="{{$user->apellidoM}}" type="text" class="form-control" name="apellidoM" placeholder="Apellido Materno">
                                    </div>
                                        
                                </div>
                            <div class="form-group row">
                                
                                <label for="telefono" class="col-md-4 col-form-label text-md-right">{{ __('telefono') }}</label>

                                <div class="col-md-6">
                                    
                                    <input value="{{$user->telefono}}" type="tel" class="form-control" name="telefono" placeholder="Telefono">
                                </div>
                                        
                            </div>

                            
                            
    
                            <div class="form-group row">
                                <label for="password" class="col-md-4 col-form-label text-md-right">{{ __('Password') }}</label>
    
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
                                <label for="password-confirm" class="col-md-4 col-form-label text-md-right">{{ __('Confirm Password') }}</label>
    
                                <div class="col-md-6">
                                    <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required>
                                </div>
                            </div>
    
                            <div class="form-group row mb-0">
                                <div class="col-md-6 offset-md-4">
                                    <button type="submit" class="btn btn-primary">
                                        {{ __('Editar') }}
                                    </button>
                                </div>
                                <div class="col-md-6 offset-md-4">
                                        <a  class="btn btn-danger" href="{{route('view.users')}}">
                                            {{ __('Cancelar') }}
                                        </a>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection