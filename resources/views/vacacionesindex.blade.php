@extends('layouts.app')
@section('title','Vacaciones')
@section ('content')
@csrf

<p> LISTADO DE VACACIONES</p>
<div class="row">
@foreach ($vacaciones as $vacaciones)
<div class="col-sm">
    <div class="card text-center" style="width: 18rem; margin-top: 70px;">
    <div class="card-body">
      <h5 class="card-title">{{$vacaciones ->empleados_id}}</h5>
      <p class="card-text"> </p>
      <a href="#" class="btn btn-primary">VER MAS...</a>
    </div>
  </div>
    </div>
@endforeach
</div>
@endsection