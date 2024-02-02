<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;

    //La linea de abajo se coloca en caso de que la tabla se llame de manera distinta al plural en minúsculas del nombre
    //del modelo.
    protected $table = 'products';

}
