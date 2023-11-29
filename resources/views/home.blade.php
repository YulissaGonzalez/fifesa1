@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8 text-center">
            <h1 class="display-4">FIFESA MANTENIMIENTO</h1>

            <div class="mb-4">
                <img src="{{ asset('images/Fifesalogo.png') }}" class="img-fluid" alt="Logo">
            </div>

            <div class="row">
                <div class="col-md-6">
                    <div class="btn-group-vertical mb-4" role="group" aria-label="Opciones">
                        <a href="{{ route('empleados.create') }}" class="btn btn-outline-success btn-lg btn-block mb-2">AGREGAR EMPLEADOS</a>
                        <a href="{{ route('vacaciones.create') }}" class="btn btn-outline-success btn-lg btn-block mb-2">AGREGAR VACACIONES</a>
                        <a href="{{ route('finiquitos.create') }}" class="btn btn-outline-success btn-lg btn-block mb-2">AGREGAR FINIQUITOS</a>
                    </div>
                </div>

                <div class="col-md-6">
                    <div class="btn-group-vertical" role="group" aria-label="Listados">
                        <a href="{{ route('empleados.index') }}" class="btn btn-outline-success btn-lg btn-block mb-2">LISTADO DE EMPLEADOS</a>
                        <a href="{{ route('vacaciones.index') }}" class="btn btn-outline-success btn-lg btn-block mb-2">LISTADO DE VACACIONES</a>
                        <a href="{{ route('finiquitos.index') }}" class="btn btn-outline-success btn-lg btn-block mb-2">LISTADO DE FINIQUITOS</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection


