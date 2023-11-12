@extends('layouts.app')

@section('title', 'Status de Empleados')

@section('content')

<div class="container">
    <form method="GET" action="{{ route('empleados.indexx') }}">
        <input type="text" name="query" placeholder="Término de búsqueda">
        <button type="submit" class="btn btn-dark">Buscar</button>
    </form>
    <div class="text-center">
        <h1 class="display-4">Status de Empleados</h1>
        </div>
    <div class="d-flex justify-content-center mt-4">
        <a href="{{ route('empleados.index') }}" class="btn btn-success">Atras</a>
        <a href="{{ route('listados.pdf') }}" class="btn btn-success">Descargar PDF</a>
    </div>
<br>
<br>
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
