@csrf
<div class="mb-3">
    <label for="empleados_id" class="form-label">ID del Empleado:</label>
    <input type="text" name="empleados_id" value="{{ old('empleados_id', $vacacion->empleados_id ?? '') }}" class="form-control">
</div>
<div class="mb-3">
    <label for="cargo" class="form-label">Cargo:</label>
    <input type="text" name="cargo" value="{{ old('cargo', $vacacion->cargo ?? '') }}" class="form-control">
</div>
<div class="mb-3">
    <label for="fecha_ingreso" class="form-label">Fecha de Ingreso:</label>
    <input type="text" name="fecha_ingreso" value="{{ old('fecha_ingreso', $vacacion->fecha_ingreso ?? '') }}" class="form-control">
</div>
<div class="mb-3">
    <label for="pago_vacacional" class="form-label">Pago por Vacaciones:</label>
    <input type="text" name="pago_vacacional" value="{{ old('pago_vacacional', $vacacion->pago_vacacional ?? '') }}" class="form-control">
</div>
<div class="mb-3">
    <label for="inicio_vacaciones" class="form-label">Inicio de Vacaciones:</label>
    <input type="text" name="inicio_vacaciones" value="{{ old('inicio_vacaciones', $vacacion->inicio_vacaciones ?? '') }}" class="form-control">
</div>
<div class="mb-3">
    <label for="regreso_vacaciones" class="form-label">Regreso de Vacaciones:</label>
    <input type="text" name="regreso_vacaciones" value="{{ old('regreso_vacaciones', $vacacion->regreso_vacaciones ?? '') }}" class="form-control">
</div>
<div class="mb-3">
    <label for="dias_vacaciones" class="form-label">Días de Vacaciones:</label>
    <input type="text" name="dias_vacaciones" value="{{ old('dias_vacaciones', $vacacion->dias_vacaciones ?? '') }}" class="form-control">
</div>
