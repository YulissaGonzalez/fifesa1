<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('empleados', function (Blueprint $table) {
            $table->id();
            $table->string('nombre_empleado');
            $table->string('puesto');
            $table->string('nss');
            $table->string('rfc');
            $table->string('curp');
            $table->float('salario_sueldo_base');
            $table->string('movimiento');
            $table->date('fecha_ingreso');
            $table->unsignedBigInteger('users_id');
            $table->timestamps();

            $table->foreign('users_id')->references('id')->on('users')->onDelete('NO ACTION')->onUpdate('NO ACTION');
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('empleados');
    }
};
