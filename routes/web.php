<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\TiendaDeportiva\Articulo;
use App\Http\Controllers\TiendaDeportiva\Marca;
use App\Http\Controllers\TiendaDeportiva\Tienda;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', [HomeController::class, 'index']);

Route::get('/home', [HomeController::class, 'index']);

//ruta articulo
Route::get('/montenegro/articulos', [Articulo::class, 'index']);

//ruta marca
Route::get('/montenegro/marcas', [Marca::class, 'index']);

//ruta tienda
Route::get('/montenegro/presentacion', [Tienda::class, 'index']);

