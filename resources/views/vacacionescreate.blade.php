<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css">
@extends('layouts.app')
@section('title','Vacaciones Create')
@section('content')
<form class="form-group" method="POST" action="/vacaciones">
    @csrf
    <div class="form-group">
        <label for="">Id del Empleado:</label>
        <input type="text" name="empleados_id" class="form-control">
        <label for="">Cargo:</label>
        <input type="text" name="cargo" class="form-control">
        <label for="">Fecha de Ingreso:</label>
        <input type="text" name="fecha_ingreso" class="form-control">
        <label for="">Pago por Vacaciones:</label>
        <input type="text" name="pago_vacacional" class="form-control">
        <label for="">Inicio de Vacaciones:</label>
        <input type="text" name="inicio_vacaciones" class="form-control">
        <label for="">Regreso de Vacaciones:</label>
        <input type="text" name="regreso_vacaciones" class="form-control">
        <label for="">Días de Vacaciones:</label>
        <input type="text" name="dias_vacaciones" class="form-control">
    </div>

    <button type="submit" class="btn btn-primary">
        GUARDAR</button>
    </form>
@endsection