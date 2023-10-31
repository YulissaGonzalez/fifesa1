@extends('layouts.pdfinicio')
@section('content')
<style>
    @font-face {
        font-family: 'glyphicons_halflings_normal';
        src: url('{{ storage_path('fonts/glyphicons_halflings_normal_3d76689c6cd5d64eacf204729ecf81bc.ufm') }}') format('truetype');
    }
</style>
<h1 style="text-align: center;">STATUS DE LOS EMPLEADOS</h1>
<br>
<table class="table table-hover table-striped">
    <thead>
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
@endsection