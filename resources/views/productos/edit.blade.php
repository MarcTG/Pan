@extends('layouts.app')

@section('content')





<div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">{{ __('Nuevo Producto') }}</div>
    
                    <div class="card-body">
                            
                        <form method="POST" action="{{ route('update.producto', $producto) }}">
                            @csrf

                            <div class="form-group row">

                                <label for="nombre" class="col-md-2 col-form-label text-md-right">{{ __('Nombre') }}</label>

                                <div class="col-md-6">
                                    
                                    <input type="text" class="form-control" name="nombre" placeholder="Nombre" value="{{$producto->nombre}}" required>

                                </div>
                                    
                            </div>

                            <div class="form-group row">

                                <label for="descripcion" class="col-md-2 col-form-label text-md-right">{{ __('Descripcion') }}</label>

                                <div class="col-md-6">
                                    
                                    <textarea rows="4" cols="50" type="text" class="form-control" name="descripcion"  placeholder="Descripcion" required>{{$producto->descripcion}}</textarea>

                                </div>
                                    
                            </div>

                            <div class="form-group row">

                                <label for="precio" class="col-md-2 col-form-label text-md-right">{{ __('Precio') }}</label>

                                <div class="col-md-6">
                                    
                                    <input type="text" class="form-control" name="precio" placeholder="Precio" value="{{$producto->precio}}"  required>

                                </div>
                                    
                            </div>
                            <div class="form-group row mb-0">
                                <div class="col-md-6 offset-md-4">
                                    <button type="submit" class="btn btn-success">
                                        {{ __('Guardar') }}
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