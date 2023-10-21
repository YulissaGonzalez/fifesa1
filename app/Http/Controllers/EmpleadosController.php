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
        return view('empleadosindex', compact('empleados'));
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
        return redirect()->route('empleados.index');
    }

    public function show(empleados $empleado)
    {
       
        return view('empleadosshow', compact('empleado'));
    }

    public function edit(empleados $empleados)
    {
        return view('empleadosedit', compact('empleados'));
    }

    public function update(Request $request, $id)
    {
     
    }

    public function destroy(string $id)
    {
        $empleado = Blouses::find($id);

        if (!$empleado) {
            return redirect('/empleados')->with('error', 'El empleado no existe o ya ha sido eliminada');
        }

        $empleado->delete();

        return redirect('/empleados')->with('success', 'Empleado eliminada exitosamente');
    }
}
