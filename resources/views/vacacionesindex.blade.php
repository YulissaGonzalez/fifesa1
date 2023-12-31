@extends('layouts.app')

@section('title', 'Vacaciones')

@section('content')
  @csrf
  <form method="GET" action="{{ route('vacaciones.index') }}">
    <input type="text" name="query" placeholder="Término de búsqueda">
    <button type="submit" class="btn btn-dark">Buscar</button>
</form>


  <div class="text-center">
    <h1 class="display-4">Listado de Vacaciones</h1>
  </div>
  <div class="bg-success p-2 text-center text-dark bg-opacity-10">
    <strong>
        @if(count($vacaciones) == 1)
            1 vacación está siendo tomada
        @else
            {{ count($vacaciones) }} vacaciones están siendo tomadas
        @endif
    </strong>
</div>


  <div class="d-flex justify-content-center mt-4">
    <a href="{{ route('listadov.pdf') }}" class="btn btn-success">Descargar PDF</a>
  </div>

  <div class="row mt-4">
    @foreach ($vacaciones as $vacacion)
      <div class="col-sm">
        <div class="card text-center" style="width: 18rem; margin-top: 70px; background-color: #dfdfdf; border: 1px solid #e0e0e0;">
          <div class="card-body">
            <h5 class="card-title" style="color: #333; font-size: 1.5rem; font-weight: bold;">{{ $vacacion->empleado->nombre_empleado }}</h5>
            <p class="card-text"></p>
            <a href="/vacaciones/{{ $vacacion->id }}" class="btn btn-outline-success ml-4">Mostrar</a>
            <a href="/vacaciones/{{ $vacacion->id }}/editvacacion" class="btn btn-outline-success ml-4">Editar</a>
            <br><br>
            <form method="POST" action="{{ url('vacaciones/delete', ['id' => $vacacion->id]) }}">
              @csrf
              <button type="submit" class="btn btn-outline-danger ml-4">Eliminar</button>
            </form>
          </div>
        </div>
      </div>
    @endforeach
  </div>
@endsection
