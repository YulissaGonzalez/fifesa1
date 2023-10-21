<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css">
@extends('layouts.app')
@section('title', 'Finiquitos Edit')
@section('content')
<div class="container">
    <h2>Editar Finiquito</h2>
    <form method="POST" action="{{ route('finiquitos.update', $finiquito->id) }}" enctype="multipart/form-data">
        @method('PUT')
        @csrf
        <div class="mb-3">
            <label for="empleados_id" class="form-label">ID del Empleado:</label>
            <input type="text" name="empleados_id" value="{{ $finiquito->empleados_id }}" class="form-control">

            <label for="monto_diario" class="form-label">Monto Diario:</label>
            <input type="text" name="monto_diario" value="{{ $finiquito->monto_diario }}" class="form-control">

            <label for="dias_a_la_fecha" class="form-label">Días Transcurridos a la Fecha:</label>
            <input type="text" name="dias_a_la_fecha" value="{{ $finiquito->dias_a_la_fecha }}" class="form-control">

            <label for="total_finiquito" class="form-label">Total del Finiquito:</label>
            <input type="text" name="total_finiquito" value="{{ $finiquito->total_finiquito }}" class="form-control">

        </div>
        <div class="text-center">
            <button type="submit" class="btn btn-secondary">GUARDAR CAMBIOS</button>
        </div>
    </form>
</div>
@endsection
