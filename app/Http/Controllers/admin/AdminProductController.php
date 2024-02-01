<?php

namespace App\Http\Controllers\admin;

use App\Models\Product;
use App\Http\Controllers\Controller;

class AdminProductController extends Controller
{
    public function index()
    {
        $datos = [];
        $datos["Titulo"] = "Admin Page - Products - Online Store";
        $datos["Productos"] = Product::all();
        return view('admin.Product.index')->with("datos", $datos);
    }
}
