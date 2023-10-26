<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css">
@extends('layouts.app')
@section('title', 'Finiquitos Edit')
@section('content')
<div class="container">
    <h2>Editar Finiquito</h2>
    {!! Form::model($finiquito, ['url' => route('finiquitos.update', $finiquito->id), 'method' => 'PUT', 'enctype' => 'multipart/form-data']) !!}
    @csrf
    @include('finiquitosform')
    <div class="text-center">
        {!! Form::submit('GUARDAR CAMBIOS', ['class' => 'btn btn-secondary']) !!}
    </div>
    {!! Form::close() !!}
</div>
@endsection


