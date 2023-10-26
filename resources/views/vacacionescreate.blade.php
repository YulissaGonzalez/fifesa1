<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css">
@extends('layouts.app')
@section('title','Vacaciones Create')
@section('content')
<div class="container mt-5">
    <h1 class="text-center">Agregar Vacaciones</h1>
    <form class="mt-4" method="POST" action="/vacaciones">
        @include('vacacionesform') 
        <button type="submit" class="btn btn-primary">GUARDAR</button>
    </form>
</div>
@endsection
