@extends('layouts.app')

@section('content')
<div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">{{ __('Editar') }}</div>
    
                    <div class="card-body">
                        <form method="POST" action="{{ route('update.cliente', $cliente) }}">
                            @csrf

                            <div class="form-group row">
                                <label for="id" class="col-md-4 col-form-label text-md-right">{{ __('NIT') }}</label>
                                <div class="col-md-6">
                                    
                                    <input type="text" class="form-control" name='nit' placeholder="NIT" required autofocus value="{{$cliente->nit}}">
                                </div>
                                
                            </div>

                            <div class="form-group row">
                                <label for="nombre" class="col-md-4 col-form-label text-md-right">{{ __('nombre') }}</label>
    
                                <div class="col-md-6">
                                    <input value="{{$cliente->nombre}}" id="nombre" type="text" class="form-control{{ $errors->has('nombre') ? ' is-invalid' : '' }}" name="nombre" value="{{ old('nombre') }}" required >
    
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
                                    
                                    <input value="{{$cliente->apellidoP}}" type="text" class="form-control" name="apellidoP" placeholder="Apellido Paterno">
                                </div>
                                    
                            </div>
                            <div class="form-group row">

                                    <label for="apellidoM" class="col-md-4 col-form-label text-md-right">{{ __('apellidoM') }}</label>
    
                                    <div class="col-md-6">
                                        
                                        <input value="{{$cliente->apellidoM}}" type="text" class="form-control" name="apellidoM" placeholder="Apellido Materno">
                                    </div>
                                        
                                </div>
                           
    
                            <div class="form-group row mb-0">
                                <div class="col-md-6 offset-md-4">
                                    <button type="submit" class="btn btn-primary">
                                        {{ __('Guardar') }}
                                    </button>
                                </div>
                                <div class="col-md-6 offset-md-4">
                                        <a  class="btn btn-danger" href="{{route('index.cliente')}}">
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