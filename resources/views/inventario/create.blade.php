@extends('layouts.app')

@section('content')

 
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">{{ __('Salida de inventario') }}</div>
                    @if (session('info'))
                    <div class="alert alert-danger" role="alert">
                            {{session('info')}}
                    </div>
                    @endif
                    <div class="card-body">
                        <form method="POST" action="{{ route('store.inventario') }}">
                            @csrf

                            <div class="form-group row"> 
                                    <label class="col-sm-3 control-label">Receta</label> 
                                    <div class="col-sm-5"> 
                                        <select class="select2 form-control" name="idReceta">
                                            @foreach ($recetas as $receta)
                                                <option value="{{$receta->id}}"  >{{$receta->nombre}}</option>
                                            @endforeach
                                            
                                        </select>
                                    </div> 
                                </div>
                            
                            <div class="form-group row">

                                <label for="porciones" class="col-md-2 col-form-label text-md-right">{{ __('Porcion(es)') }}</label>

                                <div class="col-md-6">
                                    
                                    <input type="text" class="form-control" name="porciones" placeholder="Porcion(es)" required>

                                </div>
                                    
                            </div>

                            <div class="form-group row mb-0">
                                <div class="col-md-6 offset-md-4">
                                    <button type="submit" class="btn btn-primary">
                                        {{ __('Guardar') }}
                                    </button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>

@endsection