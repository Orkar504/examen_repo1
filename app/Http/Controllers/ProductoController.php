<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Producto;

class ProductoController extends Controller
{
    public function verProductos(){
        $productos = Producto::all();
        return view("productos", compact("productos"));
    }

    public function vistaNuevoProducto(){
        return view("crearproducto");
    }

    public function crearProducto(Request $request){
        $producto = new Producto();
        $producto->Id = $request->Id;
        $producto->descripcion = $request->descripcion;
        $producto->precio = $request->precio;
        $producto->stock = $request->stock;
        $producto->pagaIsv = $request->pagaIsv;
        $producto->save();

        return redirect("/productos");

    }
}

