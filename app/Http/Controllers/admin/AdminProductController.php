<?php

namespace App\Http\Controllers\admin;

use App\Models\Product;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request; //Esta linea trae el codigo sobre la clase request
//Necesaria para la obtencion de datos del formulario y para la validacion de los mismos.

class AdminProductController extends Controller
{
    public function index()
    {
        $datos = [];
        $datos["Titulo"] = "Admin Page - Products - Online Store";
        $datos["Productos"] = Product::all();
        return view('admin.Product.index')->with("datos", $datos);
    }

    //Creamos el controlador que va a recibir los datos del formulario y los va almacenar en la
    //base de datos.
    public function almacena(Request $request){
        //Accedemos a los campos que nos llegan con la variable request con el metodo input().
        //No hace falta que instanciemos las propiedades del objeto en el modelo ya que este es una
        //representación de la tabla de la base de datos, por lo que de manera natural, sus propiedades 
        //,que no hemos instanciados, son los campos de la tabla.

        //Se validan los campos. En caso de error se vuelve al formulario. Si todo va bien, se sigue con el codigo.
        $request->validate([
            'name' => 'required|min:3',
            'description' => 'required|min:3',
            'price' => 'required|min:1',
        ]);
        //Se almacenan campos de los inputs en cada atributo del objeto Product que referencia a los 
        //respectivos campos de la tabla.

        $producto = new Product;
        $producto->nombre = $request->input('name');
        $producto->descripcion = $request->input('description');
        $producto->imagen = 'cargando.png';
        $producto->precio = $request->input('price');

        //Teoricamente se guardan los datos en la tabla
        $producto->save();

        //Se returna la vista de donde ha sido llamado este metodo del controlador
       return back();





    }
}
