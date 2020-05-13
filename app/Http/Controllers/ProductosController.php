<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProductosController extends Controller
{
    //
    public function index(){

        return view("productos.productos")->with('producto', \App\Producto::paginate(7)->setPath('productos'));
    }
}
