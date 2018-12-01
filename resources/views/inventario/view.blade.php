@extends('layouts.app')

@section('content')

       <div class="container">
            <div class="row">
                <div class="col-12">
                    <h4>Empleado: {{$empleado->nombre}} </h4>
                    
                    <h4>Fecha: {{date("d/m/Y", strtotime(substr($receta->created_at,0,11)))}}</h4>
                    <h4>Hora: {{substr($receta->created_at,11)}}</h4>
                    <h4>Receta: {{$receta->nombre}} </h4>
                    <h4>Porciones: {{$inventario->porciones}} </h4>
                    <h4>Cantidad de producto: {{$inventario->porciones * $receta->cantidadProducto}} </h4>
                    
                </div>
                <br>
                <div class="col-12">
                        <div class="panel panel-primary">
                            <div class="panel-heading clearfix">
                                <h3 class="panel-title">Cantidad de materias</h3>
                                
                            </div>
                            <div class="panel-body">
                                <div class="table-responsive">
                                    <table class="table table-striped">
                                        <thead> 
                                            <tr> 
                                                <th>Material</th> 
                                                <th>Cantidad</th> 
                                            </tr> 
                                        </thead> 
                                        <tbody>
                                            @foreach ($materias as $materia)
                                                <tr> 
                                                    <td>{{$materia->nombre}}</td> 
                                                   
                                                    <td>{{$materia->cantidad * $inventario->porciones}}</td> 
                                                </tr> 
                                            @endforeach 
                                            
                                            
                                        </tbody> 
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>

                    @if (!$receta->state)
                    <div class="col-md-5">
                        <form method="POST" action="{{ route('finish.inventario', $inventario) }}">
                                @csrf
                               
                                
                                <div class="col-sm-5"> 
                                        <input type="text" class="form-control" name="perdida" placeholder="Perdida" required>
                                </div> 
                                <button class="btn btn-success">Terminado</button>

                                
                        </form>
                    </div>

                    @endif
                    
                    <div class="col-md-2"><a class="btn btn-danger" href="{{route('delete.inventario', $inventario->id)}}">Anular</a></div>
                    
            </div>
       </div>
@endsection