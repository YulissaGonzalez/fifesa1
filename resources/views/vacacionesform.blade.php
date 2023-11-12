@csrf
<div class="mb-3">
    {!! Form::label('cargo', 'Cargo:', ['class' => 'form-label']) !!}
    {!! Form::text('cargo', old('cargo', $vacacion->cargo ?? ''), ['class' => 'form-control'.($errors->has('cargo') ? ' is-invalid' : '')]) !!}
    @error('cargo')
    <div class="invalid-feedback" style="color: red;">
        {{ $message }}
    </div>
    @enderror
</div>
<div class="mb-3">
    {!! Form::label('fecha_ingreso', 'Fecha de Ingreso:', ['class' => 'form-label']) !!}
    {!! Form::date('fecha_ingreso', old('fecha_ingreso', $vacacion->fecha_ingreso ?? ''), ['class' => 'form-control'.($errors->has('fecha_ingreso') ? ' is-invalid' : '')]) !!}
    @error('fecha_ingreso')
    <div class="invalid-feedback" style="color: red;">
        {{ $message }}
    </div>
    @enderror
</div>
<div class="mb-3">
    {!! Form::label('pago_vacacional', 'Pago por Vacaciones:', ['class' => 'form-label']) !!}
    {!! Form::text('pago_vacacional', old('pago_vacacional', $vacacion->pago_vacacional ?? ''), ['class' => 'form-control'.($errors->has('pago_vacacional') ? ' is-invalid' : '')]) !!}
    @error('pago_vacacional')
    <div class="invalid-feedback" style="color: red;">
        {{ $message }}
    </div>
    @enderror
</div>
<div class="mb-3">
    {!! Form::label('inicio_vacaciones', 'Inicio de Vacaciones:', ['class' => 'form-label']) !!}
    {!! Form::date('inicio_vacaciones', old('inicio_vacaciones', $vacacion->inicio_vacaciones ?? ''), ['class' => 'form-control'.($errors->has('inicio_vacaciones') ? ' is-invalid' : '')]) !!}
    @error('inicio_vacaciones')
    <div class="invalid-feedback" style="color: red;">
        {{ $message }}
    </div>
    @enderror
</div>
<div class="mb-3">
    {!! Form::label('regreso_vacaciones', 'Regreso de Vacaciones:', ['class' => 'form-label']) !!}
    {!! Form::date('regreso_vacaciones', old('regreso_vacaciones', $vacacion->regreso_vacaciones ?? ''), ['class' => 'form-control'.($errors->has('regreso_vacaciones') ? ' is-invalid' : '')]) !!}
    @error('regreso_vacaciones')
    <div class="invalid-feedback" style="color: red;">
        {{ $message }}
    </div>
    @enderror
</div>
<div class="mb-3">
    {!! Form::label('dias_vacaciones', 'Días de Vacaciones:', ['class' => 'form-label']) !!}
    {!! Form::text('dias_vacaciones', old('dias_vacaciones', $vacacion->dias_vacaciones ?? ''), ['class' => 'form-control'.($errors->has('dias_vacaciones') ? ' is-invalid' : '')]) !!}
    @error('dias_vacaciones')
    <div class="invalid-feedback" style="color: red;">
        {{ $message }}
    </div>
    @enderror
</div>
