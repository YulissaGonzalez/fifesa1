<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css">
@extends('layouts.app')

@section('title', 'Empleados Edit')

@section('content')
<div class="container">
    <h2>Editar Empleado</h2>
    {!! Form::model($empleado, ['url' => route('empleados.update', $empleado->id), 'method' => 'PUT', 'enctype' => 'multipart/form-data']) !!}
    @include('empleadosForm')
    <div class="text-center">
        {!! Form::submit('GUARDAR CAMBIOS', ['class' => 'btn btn-secondary']) !!}
    </div>
    {!! Form::close() !!}
</div>
@endsection
