<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css">
@extends('layouts.app')

@section('title', 'Empleados Create')

@section('content')
<div class="container">
    <h1 class="text-center mt-5">Agregar Empleado</h1>
    <form class="mt-4" method="POST" action="{{ route('empleados.store') }}">
        @csrf
        @include('EmpleadosForm')
        <button type="submit" class="btn btn-success">GUARDAR</button>
    </form>
</div>
@endsection