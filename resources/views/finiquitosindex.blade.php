@extends('layouts.app')
@section('title','Finiquitos')
@section ('content')
@csrf

<a href="{{ route('home') }}" class="btn btn-success">Página de Inicio</a>
<center><h1><p> LISTADO DE FINIQUITOS</p></h1></center>
<div class="row">
@foreach ($finiquitos as $finiquitos)
<div class="col-sm">
    <div class="card text-center" style="width: 18rem; margin-top: 70px;">
    <div class="card-body">
      <h2 class="card-title">{{$finiquitos ->empleados_id}}</h2>
      <p class="card-text"> </p>
      <a href="/finiquitos/{{$finiquitos->id}}" class="btn btn-secondary">MOSTRAR</a>
      <a href="/finiquitos/{{$finiquitos->id}}/editfiniquito" class="btn btn-secondary">EDITAR</a>
      <br>
      <br>
      <a href="/delete/{{$finiquitos->id}}" class="btn btn-secondary">ELIMINAR</a>

    </div>
  </div>
    </div>
@endforeach
</div>
@endsection