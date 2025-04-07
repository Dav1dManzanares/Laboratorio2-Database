<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
 
    public function up(): void
    {
        Schema::create('nodes', function (Blueprint $table) {
            $table->id();
            $table->string('node_address', 255)->unique();
            $table->string('node_type');
            $table->boolean('is_active');
            $table->json('configuration')->nullable();
            $table->timestamps();
        });

        Schema::create('instalaciones', function (Blueprint $table) {
            $table->id();
            $table->string('nombre_instalacion', 100);
            $table->text('ubicacion');
            $table->foreignId('usuario_id')->constrained('users')->onDelete('cascade');
            $table->foreignId('tecnologia_id')->constrained('tecnologias')->onDelete('cascade');
            $table->decimal('capacidad_instalada', 10, 2);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('instalaciones');
        Schema::dropIfExists('nodes');
    }
};
