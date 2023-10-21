@extends('layouts.app')

@section('title', 'Empleados Editar')

@section('content')
<div class="container">
    <h1>Editar Empleado</h1>

    <form method="POST" action="{{ route('empleados.update', $empleados->id) }}" enctype="multipart/form-data">
        @csrf
        @method('PUT')

        <div class="form-group">
            <label for="">Nombre del empleado:</label>
            <input type="text" name="nombre_empleado" class="form-control">
            <label for="">Puesto:</label>
            <input type="text" name="puesto" class="form-control">
            <label for="">NSS:</label>
            <input type="text" name="nss" class="form-control">
            <label for="">RFC:</label>
            <input type="text" name="rfc" class="form-control">
            <label for="">CURP:</label>
            <input type="text" name="curp" class="form-control">
            <label for="">Salario sueldo base:</label>
            <input type="text" name="salario_sueldo_base" class="form-control">
            <label for="">Movimiento:</label>
            <input type="text" name="movimiento" class="form-control">
            <label for="">Fecha de Ingreso:</label>
            <input type="text" name="fecha_ingreso" class="form-control">
            <label for="">Usuario:</label>
            <input type="text" name="users_id" class="form-control">
        </div>

        <button type="submit" class="btn btn-primary">Guardar Cambios</button>
    </form>
</div>
@endsection
