<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;

class ProductController extends Controller
{
    //La vista asociada a este controlador debe iterar sobre este array accediento a esta información
    // y mostrandola. Eso hace que la información este centralizada en esta clase.
    
    //Usamo el modelo asi que el array ya no nos vale para conseguir los datos de los productos.

    /*
    public $productos = [
        "Movil" => [
            "id" => "1",
            "nombre" => "Iphone 12",
            "descripcion" => "Smartphone de 6'0 pulgadas",
            "imagen" => "movil.png", 
            "precio" => "999",
        ],
        "Television" => [
            "id" => "2",
            "nombre" => "Lg OLED 59”",
            "descripcion" => "Television OLED 4k",
            "imagen" => "Television.png", 
            "precio" => "1195",
        ],
        "Reloj" => [
            "id" => "3",
            "nombre" => "Seiko 5",
            "descripcion" => "Reloj Seiko deportivo para el dia a dia",
            "imagen" => "reloj.png", 
            "precio" => "330",
        ],
    ];
    */


    public function index(){
        //Este metodo devuelve la lista de productos que se debe mostrar por pantalla.
            
        $productos = Product::all(); //Obtengo todos los registros de la base de datos.

        $vista = [];

        $vista["Titulo"] = "Listado de Productos - Tienda online";
        $vista["Subtitulo"] ="Listado de productos";

        //Datos que se van a pasar en una sola variable
        $datos = ["vista" => $vista , "productos" => $productos];

        //La funcion view indica a laravel que se busque dentro de la carpeta resources/views/
        //Con la funcion with, decimos que nos devuelva la vista con la variable llamada vista
        //que es el array $vista. Es decir, la funcion with envia la variable creada en el controlador
        //a la vista para que se pueda acceder a esta desde la vista.
        return view("home.productos")->with("datos", $datos); 

    }

    public function show($id){
        //Este metodo suelta una vista del producto especifico dependiendo del id que se reciba
        //El array producto tendrá las caracterísitcas del mismo que luego en la vista se 
        //seleccionarán.
        $vista =[];
        $producto;
        $producto = Product::findOrFail($id); //Obtengo el producto con el id pasado por parámetro. En caso de error salta una excepción.
        $vista["Titulo"] = $producto["nombre"];
        $vista["Subtitulo"] = $producto["nombre"];

        $datos = ["vista" => $vista, "producto" => $producto];

        //Devuelve la vista y le pasa la variable con el nombre producto
        return view("home.producto") -> with('datos', $datos);

        
    }

}
