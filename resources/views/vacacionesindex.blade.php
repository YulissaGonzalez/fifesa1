@extends('layouts.app')
@section('title','Vacaciones')
@section ('content')
@csrf

<a href="{{ route('home') }}" class="btn btn-success">Página de Inicio</a>
<center><h1><p> LISTADO DE VACACIONES</p></h1></center>
<div class="row">
@foreach ($vacaciones as $vacaciones)
<div class="col-sm">
    <div class="card text-center" style="width: 18rem; margin-top: 70px;">
    <div class="card-body">
      <h2 class="card-title">{{$vacaciones ->empleados_id}}</h2>
      <p class="card-text"> </p>
      <a href="/vacaciones/{{$vacaciones->id}}" class="btn btn-secondary">MOSTRAR</a>
      <a href="/vacaciones/{{$vacaciones->id}}/editvacacion" class="btn btn-secondary">EDITAR</a>
      <br>
      <br>
      <a href="/delete/{{$vacaciones->id}}" class="btn btn-secondary">ELIMINAR</a>
    </div>
  </div>
</div>
@endforeach
</div>
@endsection