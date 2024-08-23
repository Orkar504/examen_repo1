<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Empleado;

class EmpleadoController extends Controller
{
    public function verEmpleados(){
        $empleados = Empleado::all();
        return view("empleados", compact("empleados"));
    }

    public function vistaNuevoEmpleado(){
        return view("crearempleado");
    }

    public function crearEmpleado(Request $request){
        $empleado = new Empleado();
        $empleado->Idprestamo = $request->Idprestamo;
        $empleado->nombre = $request->nombre;
        $empleado->apellido = $request->apellido;
        $empleado->fechaIngreso = $request->fechaIngreso;
        $empleado->salario = $request->salario;
        $empleado->save();

        return redirect("/empleados");

    }
}
