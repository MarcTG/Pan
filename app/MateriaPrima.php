<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class MateriaPrima extends Model
{
    protected $fillable = ['cantidad'];

    public function addCantidad($cantidad){
        
        $this->cantidad= $this->cantidad+intval($cantidad);
        $this->save();
    }
}
