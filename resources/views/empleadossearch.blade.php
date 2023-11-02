@extends('layouts.app')

@section('title', 'Resultados de Búsqueda')

@section('content')
<a href="javascript:window.history.back()" class="btn btn-success mb-3">Regresar</a>
        @if ($empleados->count() > 0)
    <div class="container">
        <h1 class="text-center mt-5 mb-4">Resultados de Búsqueda</h1>
            <div class="table-responsive">
                <table class="table table-bordered table-striped">
                    <thead>
                        <tr>
                            <th>ID</th>
                            <th>NOMBRE DEL EMPLEADO</th>
                            <th>PUESTO</th>
                            <th>CURP</th>
                            <th>NSS</th>
                            <th>RFC</th>
                            <th>MOVIMIENTO</th>
                            <th>SALARIO SUELDO BASE</th>
                            <th>FECHA DE INGRESO</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($empleados as $empleado)
                            <tr>
                                <td>{{ $empleado->id }}</td>
                                <td>{{ $empleado->nombre_empleado }}</td>
                                <td>{{ $empleado->puesto }}</td>
                                <td>{{ $empleado->curp }}</td>
                                <td>{{ $empleado->nss }}</td>
                                <td>{{ $empleado->rfc }}</td>
                                <td>{{ $empleado->movimiento }}</td>
                                <td>${{ $empleado->salario_sueldo_base }}</td>
                                <td>{{ $empleado->fecha_ingreso }}</td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        @else
            <p class="text-center mt-4">No se encontraron resultados.</p>
        @endif
    </div>
@endsection
