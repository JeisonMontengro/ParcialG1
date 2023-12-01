<?php

namespace App\Http\Controllers\TiendaDeportiva;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class Tienda extends Controller
{
    public function index(){
        
        return view('tienda.descripcion_tienda');
     }
}
