<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css">
@extends('layouts.app')
@section('title','Empleados Create')
@section('content')
<div class="container">
    <h1 class="text-center mt-5">Agregar Empleado</h1>
    <form class="mt-4" method="POST" action="/empleados">
        @csrf
        <div class="mb-3">
            <label for="nombre_empleado" class="form-label">Nombre del empleado:</label>
            <input type="text" id="nombre_empleado" name="nombre_empleado" class="form-control">
        </div>
        <div class="mb-3">
            <label for="puesto" class="form-label">Puesto:</label>
            <input type="text" id="puesto" name="puesto" class="form-control">
        </div>
        <div class="mb-3">
            <label for="nss" class="form-label">NSS:</label>
            <input type="text" id="nss" name="nss" class="form-control">
        </div>
        <div class="mb-3">
            <label for="rfc" class="form-label">RFC:</label>
            <input type="text" id="rfc" name="rfc" class="form-control">
        </div>
        <div class="mb-3">
            <label for="curp" class="form-label">CURP:</label>
            <input type="text" id="curp" name="curp" class="form-control">
        </div>
        <div class="mb-3">
            <label for="salario_sueldo_base" class="form-label">Salario sueldo base:</label>
            <input type="text" id="salario_sueldo_base" name="salario_sueldo_base" class="form-control">
        </div>
        <div class="mb-3">
            <label for="movimiento" class="form-label">Movimiento:</label>
            <input type="text" id="movimiento" name="movimiento" class="form-control">
        </div>
        <div class="mb-3">
            <label for="fecha_ingreso" class="form-label">Fecha de Ingreso:</label>
            <input type="text" id="fecha_ingreso" name="fecha_ingreso" class="form-control">
        </div>
        <div class="mb-3">
            <label for="users_id" class="form-label">Usuario:</label>
            <input type="text" id="users_id" name="users_id" class="form-control">
        </div>
        <button type="submit" class="btn btn-success">GUARDAR</button>
    </form>
</div>
@endsection
