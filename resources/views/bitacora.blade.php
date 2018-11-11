@extends('layouts.app')

@section('content')

<div class="row">
    <div class="col-lg-10">
            <div class="panel panel-default">
                    <div class="panel-heading">
                        Bitacora
                        
                    </div>
    
                    <div class="panel-body">
                        <table class="table table-striped table-hover">
                            <thead>
                                <tr>
                                    <th>Hora</th>
                                    <th>Fecha</th>
                                    <th>Usuario</th>
                                    <th>Accion</th>
                                    <th>Tabla</th>
                                    <th>ID Tabla</th>
                                </tr>
                            </thead>
                            <tbody>
                               
                                @foreach($bitacoras as $bitacora)
                                <tr>
                                    <td>{{date("d/m/Y", strtotime(substr($bitacora->created_at,0,11)))}}</td>
                                    <td>{{substr($bitacora->created_at,11)}}</td>
                                    <td>{{$bitacora->usuario}}</td>
                                    <td>{{$bitacora->accion}}</td>
                                    <td>{{$bitacora->tabla}}</td>
                                    <td>{{$bitacora->idTabla}}</td>
                                    
                                </tr>
                                @endforeach
                            </tbody>
                        </table>
                        
                    </div>
                </div>
    </div>    
</div>  



@endsection