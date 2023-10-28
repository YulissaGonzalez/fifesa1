<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\finiquitos;
use Barryvdh\DomPDF\Facade\pdf as PDF;

class FiniquitosController extends Controller
{
    public function pdf() {
        $finiquitos = finiquitos::all();
        $pdf = PDF::loadView('pdf.listadof', compact('finiquitos'));
        return $pdf->download('listadof.pdf');

    }

    public function index()
    {
        $finiquitos=finiquitos::with('empleado')->get();
        return view('finiquitosindex', compact('finiquitos'));
    }

    public function create()
    {
        return view('finiquitoscreate');
    }

    public function store(Request $request)
    {
         //return $request->all();
         $finiquitos = new finiquitos();
         $finiquitos -> empleados_id = $request -> input('empleados_id');
         $finiquitos -> monto_diario = $request -> input('monto_diario');
         $finiquitos -> dias_a_la_fecha = $request -> input('dias_a_la_fecha');
         $finiquitos -> total_finiquito = $request -> input('total_finiquito');
         $finiquitos -> save();
         return redirect()->route('finiquitos.index');
    }

    public function show(finiquitos $finiquito)
    {
        return view('finiquitosshow', compact('finiquito'));
    }

    public function edit($id)
    {
        $finiquito = finiquitos::find($id);
        return view('finiquitosedit', compact('finiquito'));
    }

    public function update(Request $request, $id)
    {
        // Validación de datos
        $request->validate([
            'empleados_id' => 'required',
            'monto_diario' => 'required',
            'dias_a_la_fecha' => 'required',
            'total_finiquito' => 'required',
    ]);

    // Obtener el empleado a actualizar
    $finiquito = finiquitos::find($id);

    if (!$finiquito) {
        // Manejar el caso en que el empleado no se encuentra
        return redirect()->route('finquitos.index')->with('error', 'Finiquito not found');
    }

    // Actualizar los datos del empleado
        $finiquito -> empleados_id = $request -> input('empleados_id');
        $finiquito -> monto_diario = $request -> input('monto_diario');
        $finiquito -> dias_a_la_fecha = $request -> input('dias_a_la_fecha');
        $finiquito -> total_finiquito = $request -> input('total_finiquito');
        
        $finiquito->save();

    return redirect()->route('finiquitos.index')->with('success', 'Finiquito updated successfully');
    }

    public function destroy(string $id)
    {
        $finiquito = finiquitos::find($id);

        if (!$finiquito) {
            return redirect('/finiquitos')->with('error', 'El finiquito no existe o ya ha sido eliminado');
        }

        $finiquito->delete();

        return redirect('/finiquitos')->with('success', 'Finiquito eliminado exitosamente');

    }
}
