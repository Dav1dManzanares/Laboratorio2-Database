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
        Schema::create('almacenamientos', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
        });

        Schema::create('almacenamiento_distribuido', function (Blueprint $table) {
            $table->id();
            $table->foreignId('instalacion_id')->constrained('instalacions')->cascadeOnDelete();
            $table->date('fecha');
            $table->decimal('capacidad_almacenada', 10, 2);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('almacenamientos');
        Schema::dropIfExists('almacenamiento_distribuido');
    }
};
