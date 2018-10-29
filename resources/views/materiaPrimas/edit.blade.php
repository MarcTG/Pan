@extends('layouts.app')

@section('content')
<div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">{{ __('Materia Prima') }}</div>
    
                    <div class="card-body">
                        <form method="POST" action="{{ route('update.materia_prima', $materia) }}">
                            @csrf

                            <div class="form-group row">

                                <label for="nombre" class="col-md-2 col-form-label text-md-right">{{ __('Nombre') }}</label>
    
                                <div class="col-md-6">

                                        <input value="{{$materia->nombre}}" id="nombre" type="text" class="form-control " name="nombre" value="{{ old('nombre') }}" required >

                                        <span class="invalid-feedback" role="alert">

                                            <strong>{{ $errors->first('nombre') }}</strong>

                                        </span>
                                </div>
                            </div>
                            
                            <div class="form-group row"> 
                                <label class="col-sm-3 control-label">Medida</label> 
                                <div class="col-sm-5"> 
                                    <select class="select2 form-control" name="medida">
                                        @foreach ($medidas as $medida)
                                            @if ($medida->id==$materia->medida_id)
                                                <option value="{{$medida->id}}"  selected>{{$medida->nombre}}</option>
                                            @else
                                                <option value="{{$medida->id}}"  >{{$medida->nombre}}</option>
                                            @endif
                                            
                                        @endforeach
                                        
                                    </select>
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