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
        Schema::create('registro_vocal', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('actor_id');
            $table->unsignedBigInteger('personaje_id');
            $table->string('tono', 50)->nullable();
            $table->string('idioma', 50)->nullable();
            $table->timestamps();

            // Aquí hacemos referencia a la tabla 'actores'
            $table->foreign('actor_id')
                  ->references('id')
                  ->on('actores')
                  ->onDelete('cascade');

            $table->foreign('personaje_id')
                  ->references('id')
                  ->on('personajes')
                  ->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('registro_vocal');
    }
};
