<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Proveedores;

class ProveedoresController extends Controller
{
    public function verProveedores(){
        $proveedores = Proveedores::all();
        return view("proveedores", compact("proveedores"));
    }

    public function vistaNuevoProveedor(){
        return view("crearproveedor");
    }

    public function crearProveedor(Request $request){
        $proveedor = new Proveedores();
        $proveedor->Idproveedor = $request->Idproveedor;
        $proveedor->nombre = $request->nombre;
        $proveedor->fechaRegistro = $request->fechaRegistro;
        $proveedor->telefono = $request->telefono;
        $proveedor->correo = $request->correo;
        $proveedor->save();

        return redirect("/proveedores");
    }
}
