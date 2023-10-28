<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css">
@extends('layouts.app')

@section('title', 'Vacaciones Edit')

@section('content')
<div class="container">
    <h2>Editar Vacación</h2>
    {!! Form::model($vacacion, ['url' => route('vacaciones.update', $vacacion->id), 'method' => 'PUT', 'enctype' => 'multipart/form-data']) !!}
    @include('vacacionesform')
    <div class="text-center">
        {!! Form::submit('GUARDAR CAMBIOS', ['class' => "btn btn-outline-success ml-4"]) !!}
    </div>
    {!! Form::close() !!}
</div>
@endsection


