<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css">
@extends('layouts.app')

@section('title', 'Vacaciones Create')

@section('content')
<div class="container mt-5">
    <h1 class="text-center">Agregar Vacaciones</h1>
    {!! Form::open(['url' => '/vacaciones', 'method' => 'POST', 'class' => 'mt-4']) !!}
    @csrf
    @include('vacacionesform')
    <div class="text-center">
    {!! Form::submit('GUARDAR', ['class' => "btn btn-outline-success ml-4"]) !!}
    </div>
    {!! Form::close() !!}
</div>
@endsection

