<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css">
@extends('layouts.app')

@section('title', 'Empleados Create')

@section('content')
<div class="container">
    <h1 class="text-center mt-5">Agregar Empleado</h1>
    {!! Form::open(['url' => route('empleados.store'), 'method' => 'POST', 'class' => 'mt-4']) !!}
    {!! Form::token() !!}
    @include('empleadosForm')
    <div class="text-center">
    {!! Form::submit('GUARDAR', ['class' => "btn btn-outline-success ml-4"]) !!}
    </div>
    {!! Form::close() !!}
</div>
@endsection

