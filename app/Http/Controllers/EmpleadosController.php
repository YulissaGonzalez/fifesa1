<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\empleados;

class EmpleadosController extends Controller
{
    public function index()
    {
        $empleados=empleados::all();
        return view('empleadosIndex', compact('empleados'));
    }

    public function create()
    {
        return view('empleadoscreate');
    }

    public function store(Request $request)
    {
        //return $request->all();
        $empleados = new empleados();
        $empleados -> nombre_empleado = $request -> input('nombre_empleado');
        $empleados -> puesto = $request -> input('puesto');
        $empleados -> nss = $request -> input('nss');
        $empleados -> rfc = $request -> input('rfc');
        $empleados -> curp = $request -> input('curp');
        $empleados -> salario_sueldo_base = $request -> input('salario_sueldo_base');
        $empleados -> movimiento = $request -> input('movimiento');
        $empleados -> fecha_ingreso = $request -> input('fecha_ingreso');
        $empleados -> users_id = $request -> input('users_id');
        $empleados -> save();
        return view('empleadosindex');
    }

    public function show($id)
    {
        // Lógica para mostrar un registro específico del modelo en la vista
    }

    public function edit($id)
    {
        // Lógica para mostrar el formulario de edición
    }

    public function update(Request $request, $id)
    {
        // Lógica para actualizar un registro específico en la base de datos
    }

    public function destroy($id)
    {
        // Lógica para eliminar un registro específico de la base de datos
    }
}
