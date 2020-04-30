<?php

namespace App\Http\Controllers\Producto;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

use App\Producto;

class ProductoController extends Controller
{
    public function __construct()
    {
        $this->middleware('client-credentials');
    }
    
    public function index()
    {
        $productos = Producto::all();
        return $productos;
    }

    public function create()
    {
        
    }


    public function store(Request $request)
    {
        $agregar = Producto::create($request->all());

        return $agregar;
    }

    public function show($id)
    {

        $registro = Producto::find($id);

        return $registro;
    }

    public function edit($id)
    {
        //
    }

   
    public function update(Request $request, $id)
    {
        //
        $editar = Producto::find($id);
        $editar->fill($request->all());
        $editar->save();

        return $editar;
    }

    
    public function destroy($id)
    {
        //
        $eliminar = Producto::find($id);
        $eliminar->delete();

        return $eliminar;

    }
}
