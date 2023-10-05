<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\finiquitos;

class FiniquitosController extends Controller
{
    public function index()
    {
        $finiquitos=finiquitos::all();
        return view('finiquitosIndex', compact('finiquitos'));
    }

    public function create()
    {
        return view('finiquitoscreate');
    }

    public function store(Request $request)
    {
        
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
