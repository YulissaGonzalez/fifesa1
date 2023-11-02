@extends('layouts.app') 

@section('content')
<div class="container">
    <h1 class="text-center">FIFESA MANTENIMIENTO</h1>
    <br>
    <br>
    <div class="text-center">
        <img src="{{ asset('images/Fifesalogo.png') }}" class="logo" alt="Logo">
    </div>
    <br>
    <br>
    <div class="menu-links text-center">
        <a href="{{ route('empleados.create') }}" class="btn btn-outline-success ml-4">AGREGAR EMPLEADOS</a>
        <a href="{{ route('vacaciones.create') }}" class="btn btn-outline-success ml-4">AGREGAR VACACIONES</a>
        <a href="{{ route('finiquitos.create') }}" class="btn btn-outline-success ml-4">AGREGAR FINIQUITOS</a>
    </div>
    <br>
    <br>
    <div class="menu-links text-center">
        <a href="{{ route('empleados.index') }}" class="btn btn-outline-success ml-4">LISTADO DE EMPLEADOS</a>
        <a href="{{ route('vacaciones.index') }}" class="btn btn-outline-success ml-4">LISTADO DE VACACIONES</a>
        <a href="{{ route('finiquitos.index') }}" class="btn btn-outline-success ml-4">LISTADO DE FINIQUITOS</a>
    </div>
</div>

@endsection

