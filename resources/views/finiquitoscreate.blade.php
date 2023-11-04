<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css">
@extends('layouts.app')
@section('title', 'Finiquitos Create')
@section('content')
<div class="container mt-5">
    <h1 class="text-center">Agregar Finiquitos</h1>
    {!! Form::open(['url' => '/finiquitos', 'method' => 'POST', 'class' => 'mt-4']) !!}
    @csrf
    <div class="mb-3">
        {!! Form::label('empleados_id', 'ID del Empleado:', ['class' => 'form-label']) !!}
        {!! Form::select('empleados_id', $empleados->pluck('id', 'id'), old('empleados_id'), ['class' => 'form-select', 'required' => 'required', 'placeholder' => 'Elige un id de empleado']) !!}
        
    </div>
    @include('finiquitosform')
    <div class="text-center">
    {!! Form::submit('GUARDAR', ['class' => "btn btn-outline-success ml-4"]) !!}
    </div>
    {!! Form::close() !!}
</div>
@endsection


