@csrf
<div class="mb-3">
    <label for="empleados_id" class="form-label">ID del Empleado:</label>
    <input type="text" name="empleados_id" value="{{ old('empleados_id') }}" class="form-control">
</div>
<div class="mb-3">
    <label for="monto_diario" class="form-label">Monto Diario:</label>
    <input type="text" name="monto_diario" value="{{ old('monto_diario') }}" class="form-control">
</div>
<div class="mb-3">
    <label for="dias_a_la_fecha" class="form-label">Días Transcurridos a la Fecha:</label>
    <input type="text" name="dias_a_la_fecha" value="{{ old('dias_a_la_fecha') }}" class="form-control">
</div>
<div class="mb-3">
    <label for="total_finiquito" class="form-label">Total del Finiquito:</label>
    <input type="text" name="total_finiquito" value="{{ old('total_finiquito') }}" class="form-control">
</div>
