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
        Schema::create('aprobaciones_cliente', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('version_id');
            $table->boolean('aprobado')->default(false);
            $table->date('fecha_aprobacion')->nullable();
            $table->timestamps();
        
            $table->foreign('version_id')->references('id')->on('versiones')->onDelete('cascade');
        });
        
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('aprobacion_clientes');
    }
};
