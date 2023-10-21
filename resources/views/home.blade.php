@extends('layouts.app') 

@section('content')
<div class="container">
    <h1 class="text-center">FIFESA MANTENIMIENTO</h1>
    <h4 class="text-center">Página de Inicio</h4>
    <br>
    <br>
    <div class="text-center">
        <img src="{{ asset('Fifesalogo.png') }}" class="img-fluid">
    </div>
    <br>
    <br>
    <div class="menu-links text-center">
        <a href="{{ route('empleados.create') }}" class="btn btn-success">AGREGAR EMPLEADOS</a>
        <a href="{{ route('vacaciones.create') }}" class="btn btn-success">AGREGAR VACACIONES</a>
        <a href="{{ route('finiquitos.create') }}" class="btn btn-success">AGREGAR FINIQUITOS</a>
    </div>
    <br>
    <br>
    <div class="menu-links text-center">
        <a href="{{ route('empleados.index') }}" class="btn btn-success">LISTADO DE EMPLEADOS</a>
        <a href="{{ route('vacaciones.index') }}" class="btn btn-success">LISTADO DE VACACIONES</a>
        <a href="{{ route('finiquitos.index') }}" class="btn btn-success">LISTADO DE FINIQUITOS</a>
    </div>
</div>

@endsection

