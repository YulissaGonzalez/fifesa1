@extends('layouts.app')
@section('title','Vacaciones')
@section ('content')
@csrf

<center><h1><p> LISTADO DE VACACIONES</p></h1></center>
<div class="row">
@foreach ($vacaciones as $vacaciones)
<div class="col-sm">
    <div class="card text-center" style="width: 18rem; margin-top: 70px;">
    <div class="card-body">
      <h5 class="card-title">{{$vacaciones ->empleado->nombre_empleado}}</h5>
      <p class="card-text"> </p>
      <a href="/vacaciones/{{$vacaciones->id}}" class="btn btn-secondary">MOSTRAR</a>
      <a href="/vacaciones/{{$vacaciones->id}}/editvacacion" class="btn btn-secondary">EDITAR</a>
      <br>
      <br>
      <form method="POST" action="{{ url('vacaciones/delete', ['id' => $vacaciones->id]) }}">
        @csrf
        <button type="submit" class="btn btn-danger">ELIMINAR</button>
    </form>
    </div>
  </div>
</div>
@endforeach
</div>
@endsection