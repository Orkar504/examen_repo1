<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\EmpleadoController;
use App\Http\Controllers\ProductoController;
use App\Http\Controllers\ProveedoresController;

Route::get('/', function () {
    return view('welcome');
});

Route::get("/empleados", [EmpleadoController::class, "verEmpleados"])->name("empleados");

Route::get("/empleados/crear", [EmpleadoController::class, "vistaNuevoEmpleado"])->name("empleados.vista.nuevo");

Route::post("/empleados/create", [EmpleadoController::class, "crearEmpleado"])->name("empleados.crear");

Route::get("/productos", [ProductoController::class, "verProductos"])->name("productos");

Route::get("/productos/crear", [ProductoController::class, "vistaNuevoProducto"])->name("productos.vista.nuevo");

Route::post("/productos/create", [ProductoController::class, "crearProducto"])->name("productos.crear");

Route::get("/proveedores", [ProveedoresController::class, "verProveedores"])->name("proveedores");

Route::get("/proveedores/crear", [ProveedoresController::class, "vistaNuevoProveedor"])->name("proveedores.vista.nuevo");

Route::post("/proveedores/create", [ProveedoresController::class, "crearProveedor"])->name("proveedores.crear");

