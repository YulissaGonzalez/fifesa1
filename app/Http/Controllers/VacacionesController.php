<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\vacaciones;
use App\Models\empleados;
use Laravel\Scout\Searchable;
use PDF;

class VacacionesController extends Controller
{
    public function pdf() {
        $vacaciones = vacaciones::all();
        $pdf = PDF::loadView('pdf.listadov', compact('vacaciones'));
        return $pdf->stream('listadov.pdf');

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
        $messages = [
            'empleados_id.required' => 'El ID del empleado es obligatorio.',
            'empleados_id.exists' => 'El empleado seleccionado no existe.',
            
            'cargo.required' => 'El cargo es obligatorio.',
            'cargo.string' => 'El cargo debe ser una cadena de texto.',
            
            'pago_vacacional.required' => 'El pago vacacional es obligatorio.',
            'pago_vacacional.numeric' => 'El pago vacacional debe ser un valor numérico.',
            
            'inicio_vacaciones.required' => 'La fecha de inicio de vacaciones es obligatoria.',
            'inicio_vacaciones.date' => 'La fecha de inicio de vacaciones debe ser una fecha válida.',
            
            'regreso_vacaciones.required' => 'La fecha de regreso de vacaciones es obligatoria.',
            'regreso_vacaciones.date' => 'La fecha de regreso de vacaciones debe ser una fecha válida.',
            
            'dias_vacaciones.required' => 'La cantidad de días de vacaciones es obligatoria.',
            'dias_vacaciones.numeric' => 'La cantidad de días de vacaciones debe ser un valor numérico.',
        ];
        
        $this->validate($request, [
            'empleados_id' => 'required|exists:empleados,id',
            'cargo' => 'required|string',
            'pago_vacacional' => 'required|numeric',
            'inicio_vacaciones' => 'required|date',
            'regreso_vacaciones' => 'required|date',
            'dias_vacaciones' => 'required|numeric',
        ], $messages);
        

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
        $messages = [
            //'empleados_id.required' => 'El ID del empleado es obligatorio.',
            //'empleados_id.exists' => 'El empleado seleccionado no existe.',
            
            'cargo.required' => 'El cargo es obligatorio.',
            'cargo.string' => 'El cargo debe ser una cadena de texto.',
            
            'pago_vacacional.required' => 'El pago vacacional es obligatorio.',
            'pago_vacacional.numeric' => 'El pago vacacional debe ser un valor numérico.',
            
            'inicio_vacaciones.required' => 'La fecha de inicio de vacaciones es obligatoria.',
            'inicio_vacaciones.date' => 'La fecha de inicio de vacaciones debe ser una fecha válida.',
            
            'regreso_vacaciones.required' => 'La fecha de regreso de vacaciones es obligatoria.',
            'regreso_vacaciones.date' => 'La fecha de regreso de vacaciones debe ser una fecha válida.',
            
            'dias_vacaciones.required' => 'La cantidad de días de vacaciones es obligatoria.',
            'dias_vacaciones.numeric' => 'La cantidad de días de vacaciones debe ser un valor numérico.',
        ];
        
        $this->validate($request, [
            //'empleados_id' => 'required|exists:empleados,id',
            'cargo' => 'required|string',
            'pago_vacacional' => 'required|numeric',
            'inicio_vacaciones' => 'required|date',
            'regreso_vacaciones' => 'required|date',
            'dias_vacaciones' => 'required|numeric',
        ], $messages);
        

    // Obtener la vacación a actualizar
    $vacacion = vacaciones::find($id);

    // Verificar si la vacación existe
    if (!$vacacion) {
        // Manejar el caso en que la vacación no se encuentra
        return redirect()->route('vacaciones.index')->with('error', 'Vacacion not found');
    }

    // Actualizar los datos de la vacación
    $vacacion->cargo = $request->input('cargo');
    $vacacion->fecha_ingreso = $request->input('fecha_ingreso');
    $vacacion->pago_vacacional = $request->input('pago_vacacional');
    $vacacion->inicio_vacaciones = $request->input('inicio_vacaciones');
    $vacacion->regreso_vacaciones = $request->input('regreso_vacaciones');
    $vacacion->dias_vacaciones = $request->input('dias_vacaciones');

    // Guardar la vacación actualizada
    $vacacion->save();

    // Redirigir después de la actualización
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
