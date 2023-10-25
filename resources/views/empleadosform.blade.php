<div class="mb-3">
    <label for="nombre_empleado" class="form-label">Nombre del empleado:</label>
    <input type="text" id="nombre_empleado" name="nombre_empleado" class="form-control" value="{{ $empleado->nombre_empleado ?? old('nombre_empleado') }}">
</div>
<div class="mb-3">
    <label for="puesto" class="form-label">Puesto:</label>
    <input type="text" id="puesto" name="puesto" class="form-control" value="{{ $empleado->puesto ?? old('puesto') }}">
</div>
<div class="mb-3">
    <label for="nss" class="form-label">NSS:</label>
    <input type="text" id="nss" name="nss" class="form-control" value="{{ $empleado->nss ?? old('nss') }}">
</div>
<div class="mb-3">
    <label for="rfc" class="form-label">RFC:</label>
    <input type="text" id="rfc" name="rfc" class="form-control" value="{{ $empleado->rfc ?? old('rfc') }}">
</div>
<div class="mb-3">
    <label for="curp" class="form-label">CURP:</label>
    <input type="text" id="curp" name="curp" class="form-control" value="{{ $empleado->curp ?? old('curp') }}">
</div>
<div class="mb-3">
    <label for="salario_sueldo_base" class="form-label">Salario sueldo base:</label>
    <input type="text" id="salario_sueldo_base" name="salario_sueldo_base" class="form-control" value="{{ $empleado->salario_sueldo_base ?? old('salario_sueldo_base') }}">
</div>
<div class="mb-3">
    <label for="movimiento" class="form-label">Movimiento:</label>
    <input type="text" id="movimiento" name="movimiento" class="form-control" value="{{ $empleado->movimiento ?? old('movimiento') }}">
</div>
<div class="mb-3">
    <label for="fecha_ingreso" class="form-label">Fecha de Ingreso:</label>
    <input type="text" id="fecha_ingreso" name="fecha_ingreso" class="form-control" value="{{ $empleado->fecha_ingreso ?? old('fecha_ingreso') }}">
</div>
<div class="mb-3">
    <label for="users_id" class="form-label">Usuario:</label>
    <input type="text" id="users_id" name="users_id" class="form-control" value="{{ $empleado->users_id ?? old('users_id') }}">
</div>