@extends('layouts.app')

@section('content')


            <div class="col-md-8">
                <div class="panel panel-primary">
                    <div class="panel-heading">Producto</div>
    
                    <div class="panel-body">                                        
                        <p><strong>Nombre</strong>     {{ $receta->nombre }}</p>
                        <p><strong>Cantidad</strong>  {{ $receta->cantidadProducto }} unidades</p>
                        <p><strong>Descripcion</strong>       {{ $receta->descripcion }}</p>
                            

                            <table class="table">
                                <thead class="thead-light">
                                  <tr>
                                    <tr>
                                        <th>Material</th>
                                        <th>cantidad</th>
                                    </tr>
                                  </tr>
                                </thead>
                                <tbody>
                                    @foreach ($materias as $materia)
                                    <tr>
                                        <td>{{$materia->nombre}} </td>
                                        <td>{{$materia->cantidad}} ({{$materia->abreviatura}})</td>
                                    </tr> 
                                    @endforeach
                                  
                                </tbody>
                          </table>
                    </div>
                </div>
            </div>

@endsection