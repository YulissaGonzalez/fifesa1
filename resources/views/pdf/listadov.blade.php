@extends('layouts.pdfinicio')
@section('content')
<style>
    @font-face {
        font-family: 'glyphicons_halflings_normal';
        src: url('{{ storage_path('fonts/glyphicons_halflings_normal_3d76689c6cd5d64eacf204729ecf81bc.ufm') }}') format('truetype');
    }
</style>
<img src="images/Fifesa1.jpg" alt="Logo" width="100" > 

<h1 style="text-align: center;">LISTADO DE VACACIONES</h1>
<br>
<table class="table table-hover table-striped">
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
@endsection