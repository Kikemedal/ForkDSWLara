<?php

namespace App\Http\Controllers\admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class AdminHomeController extends Controller
{
    //Creamos la funcion que va a mostrar el titulo de la vista de admin
    //enviamos a la vista este dato mediante el array datos y con el nombre datos
    //para que se acceda desde la vista con ese nombre.
    public function index(){
        $datos = [];
        $datos["Titulo"] = "Pagina de administración - Tienda online";
        return view("admin.home.index")->with("datos", $datos); 
    }
}
