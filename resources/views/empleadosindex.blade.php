@extends('layouts.app')
@section('title','Empleados')
@section ('content')
@csrf

<p> LISTADO DE EMPLEADOS</p>
<div class="row">
@foreach ($empleados as $empleados)
<div class="col-sm">
    <div class="card text-center" style="width: 18rem; margin-top: 70px;">
    <div class="card-body">
      <h5 class="card-title">{{$empleados ->nombre_empleado}}</h5>
      <p class="card-text"> </p>
      <a href="#" class="btn btn-primary">VER MAS...</a>
    </div>
  </div>
    </div>
@endforeach
</div>
@endsection