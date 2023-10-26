<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css">
@extends('layouts.app')
@section('title', 'Finiquitos Create')
@section('content')
<div class="container mt-5">
    <h1 class="text-center">Agregar Finiquitos</h1>
    {!! Form::open(['url' => '/finiquitos', 'method' => 'POST', 'class' => 'mt-4']) !!}
    @csrf
    @include('finiquitosform')
    {!! Form::submit('GUARDAR', ['class' => 'btn btn-primary']) !!}
    {!! Form::close() !!}
</div>
@endsection


