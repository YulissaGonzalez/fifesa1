@csrf
<div class="mb-3">
    {!! Form::label('empleados_id', 'ID del Empleado:', ['class' => 'form-label']) !!}
    {!! Form::select('empleados_id', $empleados->pluck('id', 'id'), old('empleados_id', $vacacion->empleados_id ?? ''), ['class' => 'form-select', 'required' => 'required', 'placeholder' => 'Elige un id de empleado']) !!}
</div>
<div class="mb-3">
    {!! Form::label('cargo', 'Cargo:', ['class' => 'form-label']) !!}
    {!! Form::text('cargo', old('cargo', $vacacion->cargo ?? ''), ['class' => 'form-control']) !!}
</div>
<div class="mb-3">
    {!! Form::label('fecha_ingreso', 'Fecha de Ingreso:', ['class' => 'form-label']) !!}
    {!! Form::date('fecha_ingreso', old('fecha_ingreso', $vacacion->fecha_ingreso ?? ''), ['class' => 'form-control']) !!}
</div>
<div class="mb-3">
    {!! Form::label('pago_vacacional', 'Pago por Vacaciones:', ['class' => 'form-label']) !!}
    {!! Form::text('pago_vacacional', old('pago_vacacional', $vacacion->pago_vacacional ?? ''), ['class' => 'form-control']) !!}
</div>
<div class="mb-3">
    {!! Form::label('inicio_vacaciones', 'Inicio de Vacaciones:', ['class' => 'form-label']) !!}
    {!! Form::date('inicio_vacaciones', old('inicio_vacaciones', $vacacion->inicio_vacaciones ?? ''), ['class' => 'form-control']) !!}
</div>
<div class="mb-3">
    {!! Form::label('regreso_vacaciones', 'Regreso de Vacaciones:', ['class' => 'form-label']) !!}
    {!! Form::date('regreso_vacaciones', old('regreso_vacaciones', $vacacion->regreso_vacaciones ?? ''), ['class' => 'form-control']) !!}
</div>
<div class="mb-3">
    {!! Form::label('dias_vacaciones', 'Días de Vacaciones:', ['class' => 'form-label']) !!}
    {!! Form::text('dias_vacaciones', old('dias_vacaciones', $vacacion->dias_vacaciones ?? ''), ['class' => 'form-control']) !!}
</div>
