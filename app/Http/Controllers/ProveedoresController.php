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
}
