@csrf
<div class="mb-3">
    {!! Form::label('monto_diario', 'Monto Diario:', ['class' => 'form-label']) !!}
    {!! Form::text('monto_diario', old('monto_diario'), ['class' => 'form-control']) !!}
</div>
<div class="mb-3">
    {!! Form::label('dias_a_la_fecha', 'Días Transcurridos a la Fecha:', ['class' => 'form-label']) !!}
    {!! Form::text('dias_a_la_fecha', old('dias_a_la_fecha'), ['class' => 'form-control']) !!}
</div>
<div class="mb-3">
    {!! Form::label('total_finiquito', 'Total del Finiquito:', ['class' => 'form-label']) !!}
    {!! Form::text('total_finiquito', old('total_finiquito'), ['class' => 'form-control']) !!}
</div>

