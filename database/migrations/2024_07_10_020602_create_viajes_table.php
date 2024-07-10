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
        Schema::create('viajes', function (Blueprint $table) {
            $table->id('id'); // llave primaria
            $table->string('codigo')->unique();
            $table->integer('num_plazas');
            $table->date('fecha');
            $table->text('otros_datos')->nullable();
            $table->foreignId('viajero_id')->constrained('viajeros');
            $table->foreignId('origen_id')->constrained('origenes');
            $table->foreignId('destino_id')->constrained('destinos');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('viajes');
    }
};
