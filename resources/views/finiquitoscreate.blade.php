<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css">
@extends('layouts.app')
@section('title','Finiquitos Create')
@section('content')
<form class="form-group" method="POST" action="/finiquitos">
    @csrf
    <div class="form-group">
        <label for="">Id del Empleado:</label>
        <input type="text" name="empleados_id" class="form-control">
        <label for="">Monto Diario:</label>
        <input type="text" name="monto_diario" class="form-control">
        <label for="">Días Trancurridos a la Fecha:</label>
        <input type="text" name="dias_a_la_fecha" class="form-control">
        <label for="">Total del Finiquito:</label>
        <input type="text" name="total_finiquito" class="form-control">
    </div>

    <button type="submit" class="btn btn-primary">
        GUARDAR</button>
    </form>
@endsection