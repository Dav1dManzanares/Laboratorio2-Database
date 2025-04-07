<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('balances', function (Blueprint $table) {
            $table->id();
            $table->foreignId('instalacion_id')->constrained('instalaciones')->onDelete('cascade');
            $table->decimal('energia_generada', 10, 2);
            $table->decimal('energia_consumida', 10, 2);
            $table->decimal('balance_neto', 10, 2);
            $table->date('fecha');
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('balances');
    }
};
