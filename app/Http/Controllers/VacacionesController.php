<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\vacaciones;
use App\Models\empleados;
use Laravel\Scout\Searchable;
use Barryvdh\DomPDF\Facade\pdf as PDF;

class VacacionesController extends Controller
{
    public function pdf() {
        $vacaciones = vacaciones::all();
        $pdf = PDF::loadView('pdf.listadov', compact('vacaciones'));
        return $pdf->download('listadov.pdf');

    }

    public function index(Request $request)
    {
        $searchQuery = $request->input('query');

    if ($searchQuery) {
        $vacaciones = vacaciones::whereHas('empleado', function ($query) use ($searchQuery) {
            $query->where('nombre_empleado', 'like', '%' . $searchQuery . '%');
        })->get();
        return view('vacacionessearch', compact('vacaciones'));

    } else {
        $vacaciones = vacaciones::all();
        return view('vacacionesindex', compact('vacaciones'));
    }
    }

    public function create()
    {
        $empleados=empleados::all();
        return view('vacacionescreate', compact('empleados'));
    }

    public function store(Request $request)
    {
        $this->validate($request, [
            'empleados_id' => 'required|exists:empleados,id',
            'cargo' => 'required|string',
            'pago_vacacional' => 'required|numeric',
            'inicio_vacaciones' => 'required|date',
            'regreso_vacaciones' => 'required|date',
            'dias_vacaciones' => 'required|numeric',
        ]);

         //return $request->all();
         $vacaciones = new vacaciones();
         $vacaciones -> empleados_id = $request -> input('empleados_id');
         $vacaciones -> cargo = $request -> input('cargo');
         $vacaciones -> fecha_ingreso = $request -> input('fecha_ingreso');
         $vacaciones -> pago_vacacional = $request -> input('pago_vacacional');
         $vacaciones -> inicio_vacaciones = $request -> input('inicio_vacaciones');
         $vacaciones -> regreso_vacaciones = $request -> input('regreso_vacaciones');
         $vacaciones -> dias_vacaciones = $request -> input('dias_vacaciones');
         $vacaciones -> save();
         return redirect()->route('vacaciones.index');
    }

    public function show($id)
    {
        $vacacion = vacaciones::find($id); 
        return view('vacacionesshow', compact('vacacion'));
    }

    public function edit($id)
    {
        $vacacion = vacaciones::find($id);
        $empleados=empleados::all();
        return view('vacacionesedit', compact('vacacion', 'empleados'));
    }

    public function update(Request $request, $id)
    {
        // Validación de datos
        $request->validate([
            //'empleados_id' => 'required',
            'cargo' => 'required|string',
            'pago_vacacional' => 'required|numeric',
            'inicio_vacaciones' => 'required|date',
            'regreso_vacaciones' => 'required|date',
            'dias_vacaciones' => 'required|numeric',

        ]);

    // Obtener el empleado a actualizar
    $vacacion = vacaciones::find($id);

    if (!$vacacion) {
        // Manejar el caso en que el empleado no se encuentra
        return redirect()->route('vacaciones.index')->with('error', 'Vacacion not found');
    }

    // Actualizar los datos del empleado
       // $vacacion -> empleados_id = $request -> input('empleados_id');
        $vacacion  -> cargo = $request -> input('cargo');
        $vacacion  -> fecha_ingreso = $request -> input('fecha_ingreso');
        $vacacion  -> pago_vacacional = $request -> input('pago_vacacional');
        $vacacion  -> inicio_vacaciones = $request -> input('inicio_vacaciones');
        $vacacion  -> regreso_vacaciones = $request -> input('regreso_vacaciones');
        $vacacion  -> dias_vacaciones = $request -> input('dias_vacaciones');
        
        $vacacion->save();

    return redirect()->route('vacaciones.index')->with('success', 'Vacación actualizada con éxito');
    }

    public function destroy(string $id)
    {
        $vacacion = vacaciones::find($id);

        if (!$vacacion) {
            return redirect('/vacaciones')->with('error', 'La vacacion no existe o ya ha sido eliminada');
        }

        $vacacion->delete();

        return redirect('/vacaciones')->with('success', 'Vacacion eliminado exitosamente');

    }
}
