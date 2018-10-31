@extends('layouts.app')

@section('content')
<div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">{{ __('Proveedor') }}</div>
    
                    <div class="card-body">
                        <form method="POST" action="{{ route('store.proveedor') }}">
                            @csrf

                            <div class="form-group row">

                                <label for="nombre" class="col-md-2 col-form-label text-md-right">{{ __('Nombre') }}</label>
    
                                <div class="col-md-6">
                                        <input id="nombre" type="text" class="form-control " name="nombre" value="{{ old('nombre') }}" required >

                                        <span class="invalid-feedback" role="alert">

                                            <strong>{{ $errors->first('nombre') }}</strong>

                                        </span>
                                </div>
                            </div>
                            
                            <div class="form-group row">

                                <label for="direccion" class="col-md-2 col-form-label text-md-right">{{ __('Direccion') }}</label>

                                <div class="col-md-6">
                                    
                                    <input type="text" class="form-control" name="direccion" placeholder="Direccion" required>

                                </div>
                                    
                            </div>
                            <div class="form-group row">

                                <label for="telefono" class="col-md-2 col-form-label text-md-right">{{ __('Telefono') }}</label>

                                <div class="col-md-6">
                                    
                                    <input type="text" class="form-control" name="telefono" placeholder="Telefono" required>

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