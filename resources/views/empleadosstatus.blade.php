@extends('layouts.app')

@section('title', 'Status de Empleados')

@section('content')
<div class="container">
    
    <a href="{{ route('empleados.index') }}" class="btn btn-success">Volver</a>
    <a href="{{ route('listados.pdf') }}" class="btn btn-success">Descargar PDF</a>
    <h1 class="text-center my-4">Status de Empleados</h1>

    <table class="table table-bordered table-hover">
        <thead class="thead-dark">
            <tr>
                <th>Nombre del Empleado</th>
                <th>Movimiento</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($empleados as $empleado)
                <tr>
                    <td>{{ $empleado->nombre_empleado }}</td>
                    <td>{{ $empleado->movimiento }}</td>
                </tr>
            @endforeach
        </tbody>
    </table>

</div>
@endsection
