<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\vacaciones;

class VacacionesController extends Controller
{
    public function index()
    {
        $vacaciones=vacaciones::all();
        return view('vacacionesindex', compact('vacaciones'));
    }

    public function create()
    {
        return view('vacacionescreate');
    }

    public function store(Request $request)
    {
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
         return view('vacacionesindex');
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
