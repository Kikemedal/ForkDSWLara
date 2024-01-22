<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function index(){

        $vista =[];
        $vista["Titulo"] = "Listado de Productos - Tienda online";
        $vista["Subtitulo"] ="Listado de productos";




        return view("home.productos")->with("vista", $vista);

    }

    public function show($id){

    }
}
