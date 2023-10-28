@extends('layouts.app')
@section('title', 'Empleados')
@section('content')
<div class="card text-center" style="width: 18rem; margin: 70px auto; background-color: #f9f9f9; border: 2px solid #333; border-radius: 15px; box-shadow: 0px 2px 4px rgba(0, 0, 0, 0.1);">
    <div class="card-body">
        <h5 class="card-title" style="font-size: 1.5rem; font-weight: bold; color: #333;">{{ $empleado->nombre_empleado }}</h5>
        <p class="card-text" style="color: #555;">ID: {{ $empleado->id }}</p>
        <p class="card-text" style="color: #555;">PUESTO: {{ $empleado->puesto }}</p>
        <p class="card-text" style="color: #555;">NSS: {{ $empleado->nss }}</p>
        <p class="card-text" style="color: #555;">CURP: {{ $empleado->curp }}</p>
        <p class="card-text" style="color: #555;">RFC: {{ $empleado->rfc }}</p>
        <p class="card-text" style="color: #555;">SALARIO SUELDO BASE: ${{ $empleado->salario_sueldo_base }}</p>
        <p class="card-text" style="color: #555;">MOVIMIENTO: {{ $empleado->movimiento }}</p>
        <p class="card-text" style="color: #555;">FECHA DE INGRESO: {{ $empleado->fecha_ingreso }}</p>
        <a href="/empleados/" class="btn btn-dark" style="margin-top: 10px;">Atrás</a>
    </div>
</div>
@endsection




