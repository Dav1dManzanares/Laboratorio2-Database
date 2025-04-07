<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('blockchain_transacciones', function (Blueprint $table) {
            $table->id();
            $table->foreignId('instalacion_origen_id')->constrained('instalaciones')->onDelete('cascade');
            $table->foreignId('instalacion_destino_id')->constrained('instalaciones')->onDelete('cascade');
            $table->date('fecha');
            $table->decimal('cantidad', 10, 2);
            $table->string('hash_transaccion', 255);
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('blockchain_transacciones');
    }
};
