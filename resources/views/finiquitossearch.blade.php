@extends('layouts.app')

@section('title', 'Resultados de Búsqueda')

@section('content')
<a href="javascript:window.history.back()" class="btn btn-success mb-3">Regresar</a>
        @if ($finiquitos->count() > 0)
    <div class="container">
        <h1 class="text-center mt-5 mb-4">Resultados de Búsqueda</h1>
            <div class="table-responsive">
                <table class="table table-bordered table-striped">
                    <thead>
                        <tr>
                            <th>NOMBRE DEL EMPLEADO</th>
                            <th>MONTO DIARIO</th>
                            <th>DIAS TRANSCURRIDOS A LA FECHA</th>
                            <th>TOTAL DEL FINIQUITO</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($finiquitos as $finiquitos)
                            <tr>
                                <td>{{ $finiquitos->empleado->nombre_empleado  }}</td>
                                <td>{{ $finiquitos->monto_diario  }}</td>
                                <td>{{ $finiquitos->dias_a_la_fecha  }}</td>
                                <td>{{ $finiquitos->total_finiquito  }}</td>
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
