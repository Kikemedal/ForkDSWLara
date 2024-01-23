<?php

use Illuminate\Support\Facades\Route;

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

Route::get('/', "App\Http\Controllers\HomeController@index")->name("home.index");

Route::get("/about", "App\Http\Controllers\HomeController@about")->name("home.about");

// Esta sera la ruta que al clicar en productos nos lleve al controlador.
Route::get("/productos", "App\Http\Controllers\ProductController@index") ->name("home.productos");

//Esta ruta lleva al metodo show del controlador de productos.
Route::get("/productos/{id}", "App\Http\Controllers\ProductController@show")->name("home.producto");