<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css">
@extends('layouts.app')
@section('title','Vacaciones Create')
@section('content')
<div class="container mt-5">
    <h1 class="text-center">Agregar Vacaciones</h1>
    <form class="mt-4" method="POST" action="/vacaciones">
        @csrf
        <div class="mb-3">
            <label for="empleados_id" class="form-label">Id del Empleado:</label>
            <input type="text" id="empleados_id" name="empleados_id" class="form-control">
        </div>
        <div class="mb-3">
            <label for="cargo" class="form-label">Cargo:</label>
            <input type="text" id="cargo" name="cargo" class="form-control">
        </div>
        <div class="mb-3">
            <label for="fecha_ingreso" class="form-label">Fecha de Ingreso:</label>
            <input type="text" id="fecha_ingreso" name="fecha_ingreso" class="form-control">
        </div>
        <div class="mb-3">
            <label for="pago_vacacional" class="form-label">Pago por Vacaciones:</label>
            <input type="text" id="pago_vacacional" name="pago_vacacional" class="form-control">
        </div>
        <div class="mb-3">
            <label for="inicio_vacaciones" class="form-label">Inicio de Vacaciones:</label>
            <input type="text" id="inicio_vacaciones" name="inicio_vacaciones" class="form-control">
        </div>
        <div class="mb-3">
            <label for="regreso_vacaciones" class="form-label">Regreso de Vacaciones:</label>
            <input type="text" id="regreso_vacaciones" name="regreso_vacaciones" class="form-control">
        </div>
        <div class="mb-3">
            <label for="dias_vacaciones" class="form-label">Días de Vacaciones:</label>
            <input type="text" id="dias_vacaciones" name="dias_vacaciones" class="form-control">
        </div>
        <button type="submit" class="btn btn-primary">GUARDAR</button>
    </form>
</div>
@endsection
