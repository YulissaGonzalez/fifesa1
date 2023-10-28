@extends('layouts.app')

@section('title', 'Finiquitos')

@section('content')
<div class="card text-center" style="width: 18rem; margin: 70px auto; background-color: #f5f5f5; border: 2px solid #333; border-radius: 15px; box-shadow: 0px 4px 8px rgba(0, 0, 0, 0.2);">
    <div class="card-body">
        <h4 class="card-title" style="font-size: 1.5rem; font-weight: bold; color: #333;">{{ $finiquito->empleado->nombre_empleado }}</h4>
        <p class="card-text" style="color: #555; font-size: 1rem;">MONTO DIARIO: {{$finiquito->monto_diario}}</p>
        <p class="card-text" style="color: #555; font-size: 1rem;">DIAS TRANSCURRIDOS A LA FECHA: {{$finiquito->dias_a_la_fecha}}</p>
        <p class="card-text" style="color: #555; font-size: 1rem;">TOTAL DEL FINIQUITO: {{$finiquito->total_finiquito}}</p>
        <a href="/finiquitos/" class="btn btn-dark" style="margin-top: 10px;">Atrás</a>
    </div>
</div>
@endsection
