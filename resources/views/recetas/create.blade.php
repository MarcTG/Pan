@extends('layouts.app')

@section('content')


<div class="row">
        
    
        <form class="form" action="reflect.php">
          
          
        </form>
    </div>


<div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">{{ __('Receta') }}</div>
    
                    <div class="card-body">
                            
                        <form method="POST" action="{{ route('store.receta') }}">
                            @csrf
                            <div class="form-group row">

                                <label for="nombre" class="col-md-2 col-form-label text-md-right">{{ __('Nombre') }}</label>

                                <div class="col-md-6">
                                    
                                    <input type="text" class="form-control" name="nombre" placeholder="Nombre" required>

                                </div>
                                    
                            </div>
                            
                            <div class="form-group row"> 
                                <label class="col-sm-3 control-label">Producto</label> 
                                <div class="col-sm-5"> 
                                    <select class="select2 form-control" name="idProducto">
                                        @foreach ($productos as $producto)
                                            <option value="{{$producto->id}}">{{$producto->nombre}}</option>
                                        @endforeach
                                    </select>
                                </div> 
                            </div>

                            <div class="form-group row">

                                    <label for="descripcion" class="col-md-2 col-form-label text-md-right">{{ __('Descripcion') }}</label>
    
                                    <div class="col-md-6">
                                        
                                        <textarea rows="4" cols="50" type="text" class="form-control" name="descripcion" placeholder="Descripcion" required></textarea>
    
                                    </div>         
                            </div>

                            <div class="form-group row">

                                <label for="cantidad" class="col-md-2 col-form-label text-md-right">{{ __('Cantidad de unidades') }}</label>

                                <div class="col-md-6">
                                    
                                    <input type="text" class="form-control" name="cant" placeholder="Cantidad" required>

                                </div>  
                            </div>

                            <div class="form-group row">
                                <div class="col-md-8">
                                <h3 class="btn btn-primary" id="AddPerson">Adicionar Ingrediente</h3>
                                <table class="table" id="myTable">
                                        <thead>
                                          <tr>
                                            <th>Producto</th>
                                            <th>Cantidad</th>
                                            
                                          </tr>
                                        </thead>
                                        <tbody>
                                          <tr id="template" style="display: none">
                                            <td>
                                                <select class="select2 form-control" name="idMateria[]">

                                                    @foreach ($materias as $materia)
                                                        <option  value="{{$materia->id}}">{{$materia->nombre}} ({{$materia->abreviatura}})</option>
                                                    @endforeach

                                                </select>
                                            </td>
                                            <td><input type="text" class="form-control"  name="cantidad[]" /></td>
    
                                          </tr>
                                        </tbody>
                                      </table>    
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