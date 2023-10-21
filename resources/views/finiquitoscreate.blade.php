<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css">
@extends('layouts.app')
@section('title','Finiquitos Create')
@section('content')
<div class="container mt-5">
    <h1 class="text-center">Agregar Finiquitos</h1>
    <form class="mt-4" method="POST" action="/finiquitos">
        @csrf
        <div class="mb-3">
            <label for="empleados_id" class="form-label">Id del Empleado:</label>
            <input type="text" id="empleados_id" name="empleados_id" class="form-control">
        </div>
        <div class="mb-3">
            <label for="monto_diario" class="form-label">Monto Diario:</label>
            <input type="text" id="monto_diario" name="monto_diario" class="form-control">
        </div>
        <div class="mb-3">
            <label for="dias_a_la_fecha" class="form-label">Días Transcurridos a la Fecha:</label>
            <input type="text" id="dias_a_la_fecha" name="dias_a_la_fecha" class="form-control">
        </div>
        <div class="mb-3">
            <label for="total_finiquito" class="form-label">Total del Finiquito:</label>
            <input type="text" id="total_finiquito" name="total_finiquito" class="form-control">
        </div>
        <button type="submit" class="btn btn-primary">GUARDAR</button>
    </form>
</div>
@endsection
