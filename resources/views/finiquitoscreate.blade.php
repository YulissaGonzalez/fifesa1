<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css">
@extends('layouts.app')
@section('title','Finiquitos Create')
@section('content')
<form class="form-group" method="POST" action="/finiquitos">
    @csrf
    <div class="form-group">
        <label for="">Id del Empleado:</label>
        <input type="text" name="name" class="form-control">
        <label for="">Monto Diario:</label>
        <input type="text" name="apellido" class="form-control">
        <label for="">Días Trancurridos a la Fecha:</label>
        <input type="text" name="apellido" class="form-control">
        <label for="">Total del Finiquito:</label>
    </div>

    <button type="submit" class="btn btn-primary">
        GUARDAR</button>
    </form>
@endsection