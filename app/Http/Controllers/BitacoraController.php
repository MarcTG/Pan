<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\bitacora;
class BitacoraController extends Controller
{
    public function index(){
        return view('bitacora')->with('bitacoras',bitacora::all()->reverse());
    }
}
