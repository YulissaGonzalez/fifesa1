@extends('layouts.app')
@section('title','Finiquitos')
@section ('content')
@csrf

<p> LISTADO DE FINIQUITOS</p>
<div class="row">
@foreach ($finiquitos as $finiquitos)
<div class="col-sm">
    <div class="card text-center" style="width: 18rem; margin-top: 70px;">
    <div class="card-body">
      <h5 class="card-title">{{$finiquitos ->empleados_id}}</h5>
      <p class="card-text"> </p>
      <a href="#" class="btn btn-primary">VER MAS...</a>
    </div>
  </div>
    </div>
@endforeach
</div>
@endsection