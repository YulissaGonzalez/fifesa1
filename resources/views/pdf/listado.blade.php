@extends('layouts.pdfinicio')
@section('content')
<style>
    @font-face {
        font-family: 'glyphicons_halflings_normal';
        src: url('{{ storage_path('fonts/glyphicons_halflings_normal_3d76689c6cd5d64eacf204729ecf81bc.ufm') }}') format('truetype');
    }
</style>
<div style="display: flex; align-items: center; justify-content: space-between;">
    <img src="images/Fifesa1.jpg" alt="Logo" width="100" > 
    <h1 style="text-align: center;">LISTADO DE EMPLEADOS</h1>
</div>

<br>
<table class="table table-hover table-striped">
    <thead>
        <tr>
            <th>NOMBRE DEL EMPLEADO</th>
            <th>PUESTO</th>
            <th>CURP</th>
            <th>NSS</th>
            <th>RFC</th>
            <th>SALARIO SUELDO BASE</th>
            <th>FECHA DE INGRESO</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($empleados as $empleados)
            <tr>
                <td>{{ $empleados->nombre_empleado  }}</td>
                <td>{{ $empleados->puesto  }}</td>
                <td>{{ $empleados->curp  }}</td>
                <td>{{ $empleados->nss  }}</td>
                <td>{{ $empleados->rfc  }}</td>
                <td>${{ $empleados->salario_sueldo_base }}</td>
                <td>{{ $empleados->fecha_ingreso }}</td>
            </tr>
        @endforeach
    </tbody>
</table>
@endsection