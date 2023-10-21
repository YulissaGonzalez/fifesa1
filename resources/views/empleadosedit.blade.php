<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css">
@extends('layouts.app')
@section('title', 'Empleados Edit')
@section('content')
<div class="container">
    <h2>Editar Empleado</h2>
    <form method="POST" action="{{ route('empleados.update', $empleado->id) }}" enctype="multipart/form-data">
        @method('PUT')
        @csrf
        <div class="mb-3">
            <label for="nombre_empleado" class="form-label">Nombre del Empleado:</label>
            <input type="text" name="nombre_empleado" value="{{ $empleado->nombre_empleado }}" class="form-control">

            <label for="puesto" class="form-label">Puesto:</label>
            <input type="text" name="puesto" value="{{ $empleado->puesto }}" class="form-control">

            <label for="nss" class="form-label">NSS:</label>
            <input type="text" name="nss" value="{{ $empleado->nss }}" class="form-control">

            <label for="rfc" class="form-label">RFC:</label>
            <input type="text" name="rfc" value="{{ $empleado->rfc }}" class="form-control">

            <label for="curp" class="form-label">CURP:</label>
            <input type="text" name="curp" value="{{ $empleado->curp }}" class="form-control">

            <label for="salario_sueldo_base" class="form-label">SALARIO SUELDO BASE:</label>
            <input type="text" name="salario_sueldo_base" value="{{ $empleado->salario_sueldo_base }}" class="form-control">

            <label for="movimiento" class="form-label">MOVIMIENTO:</label>
            <input type="text" name="movimiento" value="{{ $empleado->movimiento }}" class="form-control">

            <label for="fecha_ingreso" class="form-label">FECHA DE INGRESO:</label>
            <input type="text" name="fecha_ingreso" value="{{ $empleado->fecha_ingreso }}" class="form-control">

        </div>
        <div class="text-center">
            <button type="submit" class="btn btn-secondary">GUARDAR CAMBIOS</button>
        </div>
    </form>
</div>
@endsection
