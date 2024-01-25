<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;

    //Dio error al conectarase a la base de datos debido a que en el PhpMyadmin, a la izquierda salia el nombre
    // de la base de datos en mayúsculas y estaba en minúsculas.
    protected $table = 'products';

}
