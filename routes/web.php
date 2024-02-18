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
Route::get("/productos", "App\Http\Controllers\ProductController@index") ->name("product.productos");

//Esta ruta lleva al metodo show del controlador de productos.
Route::get("/productos/{id}", "App\Http\Controllers\ProductController@show")->name("product.producto");

//Rutas que Conectan el metodo index de los controladores con las vistas
Route::get('/admin', 'App\Http\Controllers\admin\AdminHomeController@index')->name("admin.home.index");
Route::get('/admin/productos', 'App\Http\Controllers\admin\AdminProductController@index')->name("admin.product.index");

//Ruta que va indicar el metodo que recoge los datos del formulario. 
//Es la ruta que se añade al action, que es lo que se encuentra dentro del name().
//El parametro name permite la personalizacion del nombre de la ruta. Esto hace que el acceso a la ruta sea más
//conveniente.
Route::post('admin/productos/almacena','App\Http\Controllers\admin\AdminProductController@almacena')->name("admin.producto");

//Creamos las rutas para el controlador que elimina el producto
Route::delete('/admin/productos/{id}/delete', 'App\Http\Controllers\admin\AdminProductController@destroy')->name('admin.producto.delete');

//Creacion de rutas para la edicion de producto
//1 tipo get que muestra el formulario de edicion
Route::get('/admin/productos/{id}/edit', 'App\Http\Controllers\admin\AdminProductController@edit')->name('admin.producto.edit');


//1 Ruta que señala al controlador que modifica el producto.
Route::put('/admin/productos/{id}/edit/update', 'App\Http\Controllers\admin\AdminProductController@update')->name('admin.producto.update');