@extends('layouts.app')

@section('content')


            <div class="col-md-8">
                <div class="panel panel-primary">
                    <div class="panel-heading">Producto</div>
    
                    <div class="panel-body">                                        
                        <p><strong>Nombre</strong>     {{ $producto->nombre }}</p>
                        <p><strong>Descripcion</strong>       {{ $producto->descripcion }}</p>
                        <p><strong>Precio</strong>  {{ $producto->precio }}</p>
                        <p><strong>Cantidad</strong>  {{ $producto->cantidad }}</p>
                    </div>
                </div>
            </div>

@endsection