<?php

namespace App\Http\Controllers\TiendaDeportiva;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;


class Articulo extends Controller
{
    public function index(){
        $articulos=DB::table('articulo')->get();
        return view('articulo.listado_articulos', ['art'=>$articulos]);
     }
}
