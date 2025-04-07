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
        Schema::create('versiones', function (Blueprint $table) {
            $table->id();
            $table->integer('numero_version');
            $table->unsignedBigInteger('segmento_id');
            $table->date('fecha_creacion')->nullable();
            $table->timestamps();
        
            $table->foreign('segmento_id')->references('id')->on('segmentos')->onDelete('cascade');
        });
        
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('versions');
    }
};
