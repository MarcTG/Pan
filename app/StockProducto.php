<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class StockProducto extends Model
{
    protected $fillable = [
        'fecha', 'idProducto', 'cantidad'
    ];
}
