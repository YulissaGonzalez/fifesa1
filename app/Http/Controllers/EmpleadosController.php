<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\empleados;
use Barryvdh\DomPDF\Facade\pdf as PDF;

class EmpleadosController extends Controller
{

    public function pdf() {
        $empleados = empleados::all();
        $pdf = PDF::loadView('pdf.listado', compact('empleados'));
        return $pdf->download('listado.pdf');

    }
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

    public function edit($id)
    {
        $empleado = empleados::find($id);
        return view('empleadosedit', compact('empleado'));
    }

    public function update(Request $request, $id)
    {
        // Validación de datos
        $request->validate([
            'nombre_empleado' => 'required',
            'puesto' => 'required',
            'nss' => 'required',
            'rfc' => 'required',
            'curp' => 'required',
            'salario_sueldo_base' => 'required|numeric',
            'movimiento' => 'required',
            'fecha_ingreso' => 'required',
    ]);

    // Obtener el empleado a actualizar
    $empleado = empleados::find($id);

    if (!$empleado) {
        // Manejar el caso en que el empleado no se encuentra
        return redirect()->route('empleados.index')->with('error', 'Empleado not found');
    }

    // Actualizar los datos del empleado
        $empleado -> nombre_empleado = $request -> input('nombre_empleado');
        $empleado -> puesto = $request -> input('puesto');
        $empleado -> nss = $request -> input('nss');
        $empleado -> rfc = $request -> input('rfc');
        $empleado -> curp = $request -> input('curp');
        $empleado -> salario_sueldo_base = $request -> input('salario_sueldo_base');
        $empleado -> movimiento = $request -> input('movimiento');
        $empleado -> fecha_ingreso = $request -> input('fecha_ingreso');

        $empleado->save();

    return redirect()->route('empleados.index')->with('success', 'Empleado updated successfully');
    }

    public function destroy(string $id)
    {
        
    }
}
