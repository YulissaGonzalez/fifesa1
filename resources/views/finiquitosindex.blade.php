@extends('layouts.app')

@section('title', 'Finiquitos')

@section('content')
@csrf

<div class="text-center">
    <h1 class="display-4">Listado de Finiquitos</h1>
</div>

<div class="row mt-4">
    @foreach ($finiquitos as $finiquito)
        <div class="col-sm">
            <div class="card text-center" style="width: 18rem; margin-top: 70px; background-color: #dfdfdf; border: 1px solid #e0e0e0;">
                <div class="card-body">
                    <h5 class="card-title" style="color: #333; font-size: 1.5rem; font-weight: bold;">{{ $finiquito->empleado->nombre_empleado }}</h5>
                    <p class="card-text"></p>
                    <a href="/finiquitos/{{ $finiquito->id }}" class="btn btn-outline-success ml-4">Mostrar</a>
                    <a href="/finiquitos/{{ $finiquito->id }}/editfiniquito" class="btn btn-outline-success ml-4">Editar</a>
                    <br>
                    <br>
                    <a href="/delete/{{ $finiquito->id }}" class="btn btn-outline-danger ml-4">Eliminar</a>
                </div>
            </div>
        </div>
    @endforeach
</div>
@endsection
