<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    
    public function up(): void
    {
        Schema::create('weather_data', function (Blueprint $table) {
            $table->id();
            $table->foreignId('instalacion_id')->constrained('instalaciones')->onDelete('cascade');
            $table->decimal('temperatura', 5, 2);
            $table->decimal('radiacion_solar', 8, 2);
            $table->decimal('velocidad_viento', 5, 2);
            $table->decimal('precipitacion', 5, 2);
            $table->datetime('fecha_hora');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('weather_data');
    }
};
