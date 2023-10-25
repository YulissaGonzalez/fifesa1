<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('vacaciones', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('empleados_id');
            $table->string('cargo');
            $table->date('fecha_ingreso');
            $table->decimal('pago_vacacional', 8, 2);
            $table->date('inicio_vacaciones');
            $table->date('regreso_vacaciones');
            $table->integer('dias_vacaciones');
            $table->timestamps();

            $table->foreign('empleados_id')->references('id')->on('empleados')->onDelete('NO ACTION')->onUpdate('NO ACTION');
        });
    }
    public function down(): void
    {
        Schema::dropIfExists('vacaciones');
    }
};
