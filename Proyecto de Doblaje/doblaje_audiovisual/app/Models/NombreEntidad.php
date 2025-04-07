<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('nombre_entidades', function (Blueprint $table) {
            $table->id();
            $table->string('nombre')->unique(); // Campo 'nombre' único para identificar la entidad
            $table->string('slug')->unique()->nullable(); // Campo opcional para URLs amigables
            $table->text('descripcion')->nullable(); // Descripción opcional
            $table->boolean('active')->default(true); // Indicador de estado activo/inactivo
            $table->timestamps(); // 'created_at' y 'updated_at'
            $table->softDeletes(); // Permite "borrar" de forma suave (soft deletes)
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('nombre_entidades');
    }
};
