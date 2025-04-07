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
        Schema::create('instalacions', function (Blueprint $table) {
            $table->id();
            $table->string('nombre_instalacion', 100);
            $table->text('ubicacion');
            $table->foreignId('usuario_id')->constrained('usuarios')->cascadeOnDelete();
            $table->foreignId('tecnologia_id')->constrained('tecnologias')->cascadeOnDelete();
            $table->decimal('capacidad_instalada', 10, 2);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('instalacions');
    }
};
