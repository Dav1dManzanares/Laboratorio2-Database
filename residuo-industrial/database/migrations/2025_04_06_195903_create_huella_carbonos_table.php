<?php

use App\Models\transporte;
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
        Schema::create('huella_carbonos', function (Blueprint $table) {
            $table->id();
            $table->decimal('emicion', 10, 2);
            $table->date('fecha');
            $table->foreignIdFor(transporte::class)->constrained('transportes');
            $table->foreignIdFor(vehiculo::class)->constrained('vehiculos');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('huella_carbonos');
    }
};
