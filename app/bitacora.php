<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class bitacora extends Model
{
    protected $fillable = [
        'usuario', 'accion', 'tabla', 'idTabla'
    ];
}
