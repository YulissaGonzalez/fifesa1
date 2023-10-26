<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css">
@extends('layouts.app')
@section('title', 'VacacionesEdit')
@section('content')
<div class="container">
    <h2>Editar Vacacion</h2>
    <form method="POST" action="{{ route('vacaciones.update', $vacacion->id) }}" enctype="multipart/form-data">
        @method('PUT')
        @include('vacacionesform') 
        <div class="text-center">
            <button type="submit" class="btn btn-secondary">GUARDAR CAMBIOS</button>
        </div>
    </form>
</div>
@endsection

