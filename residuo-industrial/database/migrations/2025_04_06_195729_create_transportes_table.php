<?php

use App\Models\residuo;
use App\Models\ruta;
use App\Models\vehiculo;
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
        Schema::create('transportes', function (Blueprint $table) {
            $table->id();
            $table->date('fecha');
            $table->foreignIdFor(vehiculo::class)->constrained('vehiculos');
            $table->foreignIdFor(residuo::class)->constrained('residuos');
            $table->foreignIdFor(ruta::class)->constrained('rutas');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('transportes');
    }
};
