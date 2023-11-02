@extends('layouts.app')

@section('title', 'Resultados de Búsqueda')

@section('content')
<a href="javascript:window.history.back()" class="btn btn-success mb-3">Regresar</a>
        @if ($vacaciones->count() > 0)
    <div class="container">
        <h1 class="text-center mt-5 mb-4">Resultados de Búsqueda</h1>
            <div class="table-responsive">
                <table class="table table-bordered table-striped">
                    <thead>
                        <tr>
                            <th>NOMBRE DEL EMPLEADO</th>
                            <th>CARGO</th>
                            <th>FECHA DE INGRESO</th>
                            <th>PAGO DE VACACIONES</th>
                            <th>INICIO DE VACACIONES</th>
                            <th>REGRESO DE VACACIONES</th>
                            <th>DÍAS DE VACACIONES</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($vacaciones as $vacaciones)
                            <tr>
                                <td>{{ $vacaciones->empleado->nombre_empleado  }}</td>
                                <td>{{ $vacaciones->cargo  }}</td>
                                <td>{{ $vacaciones->fecha_ingreso  }}</td>
                                <td>{{ $vacaciones->pago_vacacional  }}</td>
                                <td>{{ $vacaciones->inicio_vacaciones  }}</td>
                                <td>{{ $vacaciones->regreso_vacaciones  }}</td>
                                <td>{{ $vacaciones->dias_vacaciones }}</td>
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
