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
                    <div class="card-header">{{ __('Comprobante') }}</div>
    
                    <div class="card-body">
                            
                        <form method="POST" action="{{ route('store.comprobante') }}">
                            @csrf

                            
                            <div class="form-group row"> 
                                <label class="col-sm-3 control-label">Proveedor</label> 
                                <div class="col-sm-5"> 
                                    <select class="select2 form-control" name="proveedor">
                                        @foreach ($proveedores as $proveedor)
                                            <option value="{{$proveedor->id}}">{{$proveedor->Nombre}}</option>
                                        @endforeach

                                    </select>
                                </div> 
                            </div>
                            <div class="form-group row">

                                <label for="fecha" class="col-md-2 col-form-label text-md-right">{{ __('Fecha') }}</label>

                                <div class="col-md-6">
                                    
                                    <input type="text" data-format="D, dd MM yyyy" class="form-control" name="fecha" placeholder="Fecha" required>

                                </div>
                                    
                            </div>
                            <div class="form-group row">

                                <label for="total" class="col-md-2 col-form-label text-md-right">{{ __('Total') }}</label>

                                <div class="col-md-6">
                                    
                                    <input type="text" class="form-control" name="total" placeholder="Total" required>

                                </div>
                                    
                            </div>
                            <h3 class="btn btn-primary" id="AddPerson">Add Person</h3>
                            <table class="table" id="myTable">
                                    <thead>
                                      <tr>
                                        <th>Producto</th>
                                        <th>Cantidad</th>
                                        <th>Precio</th>
                                      </tr>
                                    </thead>
                                    <tbody>
                                      <tr id="template" style="display: none">
                                        <td>
                                            <select class="select2 form-control" name="idMateria[]">
                                                @foreach ($materias as $materia)
                                                    <option  value="{{$materia->id}}">{{$materia->nombre}}</option>
                                                @endforeach
                                                
                                                
                                            </select>
                                        </td>
                                        <td><input type="text" class="form-control" placeholder="First Name" name="cantidad[]" /></td>
                                        <td><input type="text" class="form-control" placeholder="Surname" name="precio[]" /></td>
                                        
                                        
                                      </tr>
                                    </tbody>
                                  </table>

                            <div class="form-group row mb-0">
                                <div class="col-md-6 offset-md-4">
                                    <button type="submit" class="btn btn-success">
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