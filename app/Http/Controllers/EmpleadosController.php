<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\empleados;
use App\Models\User;
use Barryvdh\DomPDF\Facade\pdf as PDF;
use Laravel\Scout\Searchable;

class EmpleadosController extends Controller
{
    
    public function index(Request $request)
    {
        $query = $request->input('query'); 

    if ($query) {
        $empleados = empleados::search($query)->get();
        return view('empleadossearch', compact('empleados')); 
    } else {
        $empleados = empleados::all();
    }

    return view('empleadosindex', compact('empleados'));
}

    public function create()
    {
        $users=User::all();
        return view('empleadoscreate', compact('users'));
    }

    public function store(Request $request)
    {
        $this->validate($request, [
            'nombre_empleado' => 'required|string|max:255',
            'puesto' => 'required|string|max:255',
            'nss' => 'required|string|max:11',
            'rfc' => 'required|string|max:13',
            'curp' => 'required|string|max:18',
            'salario_sueldo_base' => 'required|numeric',
            'movimiento' => 'required|string|max:255',
            'fecha_ingreso' => 'required|date',
            'users_id' => 'required|exists:users,id',
            'imagen_empleado' => 'required|image|mimes:jpeg,jpg,png,gif,svg|max:2048',

        ]);

       //  return $request->all();
        $empleados = new empleados();
        $empleados -> nombre_empleado = $request -> input('nombre_empleado');
        $empleados -> puesto = $request -> input('puesto');
        $empleados -> nss = $request -> input('nss');
        $empleados -> rfc = $request -> input('rfc');
        $empleados -> curp = $request -> input('curp');
        $empleados -> salario_sueldo_base = $request -> input('salario_sueldo_base');
        $empleados -> movimiento = $request -> input('movimiento');
        $empleados -> fecha_ingreso = $request -> input('fecha_ingreso');
        if ($request->hasFile('imagen_empleado')) {
            $imageName = time() . '.' . $request->file('imagen_empleado')->extension();
            $request->file('imagen_empleado')->move(public_path('imagen_empleado'), $imageName);
            $empleados->imagen_empleado = $imageName;
        }
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
        $users=User::all();
        return view('empleadosedit', compact('empleado', 'users'));
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
            'imagen_empleado' => 'required|image|mimes:jpeg,jpg,png,gif,svg|max:2048',

    ]);
    // Obtener el empleado a actualizar
    $empleado = empleados::find($id);
   // return $request->all();
    // Actualizar los datos del empleado
        $empleado -> nombre_empleado = $request -> input('nombre_empleado');
        $empleado -> puesto = $request -> input('puesto');
        $empleado -> nss = $request -> input('nss');
        $empleado -> rfc = $request -> input('rfc');
        $empleado -> curp = $request -> input('curp');
        $empleado -> salario_sueldo_base = $request -> input('salario_sueldo_base');
        $empleado -> movimiento = $request -> input('movimiento');
        $empleado -> fecha_ingreso = $request -> input('fecha_ingreso');
        if ($request->hasFile('imagen_empleado')) {
            // Eliminar la imagen anterior si existe
            if ($empleado->imagen_empleado) {
                $imagePath = public_path('imagen_empleado/') . $empleado->imagen_empleado;
                if (file_exists($imagePath)) {
                    unlink($imagePath);
                }
            }
    
            $imageName = time() . '.' .$request->file('imagen_empleado')->extension();
            $request->imagen_empleado->move(public_path('imagen_empleado'), $imageName);
    
            $empleado->imagen_empleado = $imageName; 
        }
        $empleado->save();

    return redirect()->route('empleados.index')->with('success', 'Empleado updated successfully');
    
    
    if (!$empleado) {
        // Manejar el caso en que el empleado no se encuentra
        return redirect()->route('empleados.index')->with('error', 'Empleado not found');
    }
    }
    public function destroy(string $id)
    {
        
    }
    public function status()
    {
        $empleados=empleados::all();
        return view('empleadosstatus', compact('empleados'));
    }

    public function indexx(Request $request)
    {
        $query = $request->input('query'); 

    if ($query) {
        $empleados = empleados::search($query)->get();
        return view('statussearch', compact('empleados')); 
    } else {
        $empleados = empleados::all();
    }

}

    public function pdf() {
        $empleados = empleados::all();
        $pdf = PDF::loadView('pdf.listado', compact('empleados'));
        return $pdf->download('listado.pdf');
    }
    public function pdfs() {
        $empleados = empleados::all();
        $pdf = PDF::loadView('pdf.listados', compact('empleados'));
        return $pdf->download('listados.pdf');
    }
}
