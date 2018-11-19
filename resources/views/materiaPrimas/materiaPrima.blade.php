@extends('layouts.app')

@section('content')    

            <div class="col-lg-12">
                    @if (session('info'))
                    <div class="alert alert-success" role="alert">
                            {{session('info')}}
                    </div>
                    @endif
                <div class="panel panel-primary ">

                    <div class="panel-heading clearfix">

                        <h3 class="panel-title">Materia Prima</h3>

                        @can('create.materia_prima')
                            <a href="{{route('create.materia_prima')}}" class="btn btn-sm btn-success btn-sm pull-right">Nuevo</a>                            
                        @endcan
                        
                    </div>

                    <div class="panel-body">

                        <div class="table-responsive">

                            <table class="table table-striped table-bordered table-hover dataTables-example" >

                                <thead>
                                    <tr>
                                            <th>Nombre</th>
                                            <th>Abreviatura</th>
                                            <th>Cantidad</th>
                                            <th>Accion</th>
                                        
                                    </tr>
                                </thead>
                                
                                <tbody>
                                        @foreach ($materia_primas as $materia_prima)
                                        <tr>
                                            <td>{{$materia_prima['nombre']}}</td>
                                            <td>{{$materia_prima['medida_id']}}</td>
                                            <td>{{$materia_prima['cantidad']}}</td>                              
                                            <td>
                                                @can('edit.materia_prima')
                                                    <a class="btn btn-sm btn-primary" href="{{route('edit.materia_prima', $materia_prima)}}">Editar</a>
                                                @endcan

                                                @can('delete.materia_prima')
                                                    <a class="btn btn-sm btn-danger" href="{{route('delete.materia_prima', $materia_prima)}}">Eliminar</a>  
                                                @endcan
                                            </td>
                                        </tr> 
                                    @endforeach
                                </tbody>
                                
                            </table>
                        </div>
                    </div>
                </div>
            </div>



@endsection