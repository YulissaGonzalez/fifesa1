<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('finiquitos', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('empleados_id');
            $table->decimal('monto_diario', 4, 2);
            $table->integer('dias_a_la_fecha');
            $table->decimal('total_finiquito', 4, 2);
            $table->timestamps();

            $table->foreign('empleados_id')->references('id')->on('empleados')->onDelete('NO ACTION')->onUpdate('NO ACTION');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('finiquitos');
    }
};
