<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css">
@extends('layouts.app')
@section('title', 'VacacionesEdit')
@section('content')
<div class="container">
    <h2>Editar Vacacion</h2>
    <form method="POST" action="{{ route('vacaciones.update', $vacacion->id) }}" enctype="multipart/form-data">
        @method('PUT')
        @csrf
        <div class="mb-3">
            <label for="empleados_id" class="form-label">ID del Empleado:</label>
            <input type="text" name="empleados_id" value="{{ $vacacion->empleados_id }}" class="form-control">

            <label for="cargo" class="form-label">Cargo:</label>
            <input type="text" name="cargo" value="{{ $vacacion->cargo }}" class="form-control">

            <label for="fecha_ingreso" class="form-label">Fecha de Ingreso:</label>
            <input type="text" name="fecha_ingreso" value="{{ $vacacion->fecha_ingreso }}" class="form-control">

            <label for="pago_vacacional" class="form-label">Pago de Vacaciones:</label>
            <input type="text" name="pago_vacacional" value="{{ $vacacion->pago_vacacional }}" class="form-control">

            <label for="inicio_vacaciones" class="form-label">Inicio de Vacaciones</label>
            <input type="text" name="inicio_vacaciones" value="{{ $vacacion->inicio_vacaciones }}" class="form-control">

            <label for="regreso_vacaciones" class="form-label">Regreso de Vacaciones</label>
            <input type="text" name="regreso_vacaciones" value="{{ $vacacion->regreso_vacaciones }}" class="form-control">

            <label for="dias_vacaciones" class="form-label">Días de Vacaciones</label>
            <input type="text" name="dias_vacaciones" value="{{ $vacacion->dias_vacaciones }}" class="form-control">

        </div>
        <div class="text-center">
            <button type="submit" class="btn btn-secondary">GUARDAR CAMBIOS</button>
        </div>
    </form>
</div>
@endsection
