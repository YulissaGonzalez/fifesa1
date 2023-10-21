@extends('layouts.app')
@section('title', 'Empleados')
@section('content')
<div class="card text-center" style="width: 18rem; margin-top: 70px;">
    <div class="card-body">
        <h5 class="card-title">{{ $empleado->nombre_empleado }}</h5>
        <p class="card-text">ID: {{$empleado->id}}</p>
        <p class="card-text">PUESTO: {{$empleado->puesto}}</p>
        <p class="card-text">NSS: {{$empleado->nss}}</p>
        <p class="card-text">RFC: {{$empleado->rfc}}</p>
        <p class="card-text">SALARIO SUELDO BASE: ${{$empleado->salario_sueldo_base}}</p>
        <p class="card-text">MOVIMIENTO: {{$empleado->movimiento}}</p>
        <p class="card-text">FECHA DE INGRESO: {{$empleado->fecha_ingreso}}</p>
        <p class="card-text">USUARIO QUE REGISTRÓ: {{$empleado->users_id}}</p>
        <a href="/empleados/" class="btn btn-secondary">ATRAS</a>
    </div>
</div>
@endsection
 



