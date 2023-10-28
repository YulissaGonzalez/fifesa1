@extends('layouts.app')

@section('title', 'Vacaciones')

@section('content')
<div class="card text-center" style="width: 18rem; margin: 70px auto; background-color: #f5f5f5; border: 2px solid #333; border-radius: 15px; box-shadow: 0px 4px 8px rgba(0, 0, 0, 0.2);">
    <div class="card-body">
        <h4 class="card-title" style="font-size: 1.5rem; font-weight: bold; color: #333;">{{ $vacacion->empleado->nombre_empleado }}</h4>
        <p class="card-text" style="color: #555; font-size: 1rem;">CARGO: {{$vacacion->cargo}}</p>
        <p class="card-text" style="color: #555; font-size: 1rem;">FECHA DE INGRESO: {{$vacacion->fecha_ingreso}}</p>
        <p class="card-text" style="color: #555; font-size: 1rem;">PAGO DE VACACIONES: ${{$vacacion->pago_vacacional}}</p>
        <p class="card-text" style="color: #555; font-size: 1rem;">INICIO DE VACACIONES: {{$vacacion->inicio_vacaciones}}</p>
        <p class="card-text" style="color: #555; font-size: 1rem;">REGRESO DE VACACIONES: {{$vacacion->regreso_vacaciones}}</p>
        <p class="card-text" style="color: #555; font-size: 1rem;">DÍAS DE VACACIONES: {{$vacacion->dias_vacaciones}}</p>
        <a href="/vacaciones/" class="btn btn-dark" style="margin-top: 10px;">Atrás</a>
    </div>
</div>
@endsection
