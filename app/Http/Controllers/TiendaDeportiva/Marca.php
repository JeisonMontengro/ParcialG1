<?php

namespace App\Http\Controllers\TiendaDeportiva;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class Marca extends Controller
{
    public function index(){
        $marcas=DB::table('marca')->get();
        return view('marca.listado_marcas', ['marc'=>$marcas]);
     }
}
