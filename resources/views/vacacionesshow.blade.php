@extends('layouts.app')
@section('title', 'Vacaciones')
@section('content')
<div class="card text-center" style="width: 18rem; margin-top: 70px;">
    <div class="card-body">
        <h4 class="card-title">{{ $vacacion->empleado->nombre_empleado }}</h4>
        <p class="card-text">CARGO: {{$vacacion->cargo}}</p>
        <p class="card-text">FECHA DE INGRESO: {{$vacacion->fecha_ingreso}}</p>
        <p class="card-text">PAGO DE VACACIONES: ${{$vacacion->pago_vacacional}}</p>
        <p class="card-text">INICIO DE VACACIONES: {{$vacacion->inicio_vacaciones}}</p>
        <p class="card-text">REGRESO DE VACACIONES: {{$vacacion->regreso_vacaciones}}</p>
        <p class="card-text">DÍAS DE VACACIONES: {{$vacacion->dias_vacaciones}}</p>
        <a href="/vacaciones/" class="btn btn-secondary">ATRAS</a>
    </div>
</div>
@endsection