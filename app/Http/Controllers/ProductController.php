<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProductController extends Controller
{
    //La vista asociada a este controlador debe iterar sobre este array accediento a esta información
    // y mostrandola. Eso hace que la información este centralizada en esta clase.
    
    public $productos = [
        "Movil" => [
            "id" => "1",
            "nombre" => "Iphone 12",
            "descripcion" => "Smartphone de 6'0 pulgadas",
            "imagen" => "movil.png", 
            "precio" => "999€",
        ],
        "Television" => [
            "id" => "2",
            "nombre" => "Lg OLED 59”",
            "descripcion" => "Television OLED 4k",
            "imagen" => "Television.png", 
            "precio" => "1195€",
        ],
        "Reloj" => [
            "id" => "3",
            "nombre" => "Seiko 5",
            "descripcion" => "Reloj Seiko deportivo para el dia a dia",
            "imagen" => "reloj.png", 
            "precio" => "330€",
        ],
    ];

    public function index(){
        //Este metodo devuelve la lista de productos que se debe mostrar por pantalla.

        $vista = [];

        $vista["Titulo"] = "Listado de Productos - Tienda online";
        $vista["Subtitulo"] ="Listado de productos";

        //Datos que se van a pasar en una sola variable
        $datos = ["vista" => $vista , "productos" => $this->productos];

        //La funcion view indica a laravel que se busque dentro de la carpeta resources/views/
        //Con la funcion with, decimos que nos devuelva la vista con la variable llamada vista
        //que es el array $vista. Es decir, la funcion with envia la variable creada en el controlador
        //a la vista para que se pueda acceder a esta desde la vista.
        return view("home.productos")->with("datos", $datos); 

    }

    public function show($id){
        //Este metodo suelta una vista del producto especifico dependiendo del id que se reciba
        //El array producto tendrá las caracterísitcas del mismo que leugo en la vista se 
        //seleccionarán.
        $producto = [];

        
    }

}
