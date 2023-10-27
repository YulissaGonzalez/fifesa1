@extends('layouts.app')
@section('title', 'Finiquitos')
@section('content')
<div class="card text-center" style="width: 18rem; margin-top: 70px;">
    <div class="card-body">
        <h4 class="card-title">{{ $finiquito->empleado->nombre_empleado }}</h4>
        <p class="card-text">Monto Diario: {{$finiquito->monto_diario}}</p>
        <p class="card-text">Días Transcurridos a la Fecha: {{$finiquito->dias_a_la_fecha}}</p>
        <p class="card-text">Total del Finquito: {{$finiquito->total_finiquito}}</p>
        <a href="/finiquitos/" class="btn btn-secondary">ATRAS</a>
    </div>
</div>
@endsection