<div class="mb-3">
    {!! Form::label('nombre_empleado', 'Nombre del empleado:', ['class' => 'form-label']) !!}
    {!! Form::text('nombre_empleado', null, ['class' => 'form-control']) !!}
</div>

<div class="mb-3">
    {!! Form::label('puesto', 'Puesto:', ['class' => 'form-label']) !!}
    {!! Form::text('puesto', null, ['class' => 'form-control']) !!}
</div>

<div class="mb-3">
    {!! Form::label('nss', 'NSS:', ['class' => 'form-label']) !!}
    {!! Form::text('nss', null, ['class' => 'form-control']) !!}
</div>

<div class="mb-3">
    {!! Form::label('rfc', 'RFC:', ['class' => 'form-label']) !!}
    {!! Form::text('rfc', null, ['class' => 'form-control']) !!}
</div>

<div class="mb-3">
    {!! Form::label('curp', 'CURP:', ['class' => 'form-label']) !!}
    {!! Form::text('curp', null, ['class' => 'form-control']) !!}
</div>

<div class="mb-3">
    {!! Form::label('salario_sueldo_base', 'Salario sueldo base:', ['class' => 'form-label']) !!}
    {!! Form::text('salario_sueldo_base', null, ['class' => 'form-control']) !!}
</div>

<div class="mb-3">
    {!! Form::label('movimiento', 'Movimiento:', ['class' => 'form-label']) !!}
    
    <div class="form-check">
        {!! Form::radio('movimiento', 'Activo',
         isset($empleado) && $empleado->movimiento === 'Activo', ['class' => 'form-check-input', 'id' => 'flexRadioDefault']) !!}
        {!! Form::label('flexRadioDefault', 'Activo', ['class' => 'form-check-label']) !!}
    </div>
    
    <div class="form-check">
        {!! Form::radio('movimiento', 'Inactivo', isset($empleado) && $empleado->movimiento === 'Inactivo', ['class' => 'form-check-input', 'id' => 'flexRadioChecked']) !!}
        {!! Form::label('flexRadioChecked', 'Inactivo', ['class' => 'form-check-label']) !!}
    </div>
</div>

<div class="mb-3">
    {!! Form::label('fecha_ingreso', 'Fecha de Ingreso:', ['class' => 'form-label']) !!}
    {!! Form::date('fecha_ingreso', null, ['class' => 'form-control']) !!}
</div>

<div class="mb-3">
    {!! Form::label('users_id', 'Usuario:', ['class' => 'form-label']) !!}
    {!! Form::select('users_id',$users->pluck('name','id'), null, ['class' => 'form-select', 'required'=>'required', 'placeholder'=>'Elige un usuario']) !!}
</div>
