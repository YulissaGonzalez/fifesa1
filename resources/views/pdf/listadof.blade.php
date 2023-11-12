@extends('layouts.pdfinicio')
@section('content')
<style>
    @font-face {
        font-family: 'glyphicons_halflings_normal';
        src: url('{{ storage_path('fonts/glyphicons_halflings_normal_3d76689c6cd5d64eacf204729ecf81bc.ufm') }}') format('truetype');
    }
</style>
<img src="images/Fifesa1.jpg" alt="Logo" width="100" > 
<h1 style="text-align: center;">LISTADO DE FINIQUITOS</h1>
<br>
<table class="table table-hover table-striped">
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
                <td>${{ $finiquitos->monto_diario  }}</td>
                <td>{{ $finiquitos->dias_a_la_fecha  }}</td>
                <td>${{ $finiquitos->total_finiquito  }}</td>
            </tr>
        @endforeach
    </tbody>
</table>
@endsection