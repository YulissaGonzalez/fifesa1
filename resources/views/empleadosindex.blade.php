@extends('layouts.app')

@section('title', 'Empleados')

@section('content')
  @csrf
  <form method="GET" action="{{ route('empleados.index') }}">
    <input type="text" name="query" placeholder="Término de búsqueda">
    <button type="submit" class="btn btn-dark">Buscar</button>
</form>

  <div class="text-center">
    <h1 class="display-4">Listado de Empleados</h1>
    </div>

    <div class="bg-success p-2 text-center text-dark bg-opacity-10">
      <strong>
        @if(count($empleados) == 1)
            1 empleado registrado
        @else
            {{ count($empleados) }} empleados registrados
        @endif
    </strong>
   </div>

  <div class="d-flex justify-content-center mt-4">
    <a href="{{ route('listado.pdf') }}" class="btn btn-success">Descargar PDF</a>
    <a href="{{ route('empleados.status') }}" class="btn btn-success">Status</a>

  </div>

  <div class="row mt-4">
    @foreach ($empleados as $empleado)
      <div class="col-sm">
        <div class="card text-center" style="width: 18rem; margin-top: 30px; background-color: #dfdfdf; border: 1px solid #e0e0e0;">
          <div class="card-body">
            @if($empleado->imagen_empleado)
                        <img style="height: 100px; width: 100px; background-color: #EFEFEF; margin: 20px;"
                            class="card-img-top rounded-circle mx-auto d-block"
                            src="{{ asset('imagen_empleado/'.$empleado->imagen_empleado) }}" alt="">
                        @endif
            <h5 class="card-title" style="color: #333; font-size: 1.5rem; font-weight: bold;">{{ $empleado->nombre_empleado }}</h5>
            <a href="/empleados/{{ $empleado->id }}" class="btn btn-outline-success ml-4">Mostrar</a>
            <a href="/empleados/{{ $empleado->id }}/editempleado" class="btn btn-outline-success ml-4">Editar</a>
          </div>
        </div>
      </div>
    @endforeach
  </div>
@endsection

