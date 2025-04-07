<?php

use App\Models\HuellaCarbono;
use App\Models\industria;
use App\Models\tratamiento;
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
        Schema::create('reportes', function (Blueprint $table) {
            $table->id();
            $table->string('nombre', 45);
            $table->text('descripcion');
            $table->date('fecha');
            $table->foreignIdFor(HuellaCarbono::class)->constrained('huella_carbonos');
            $table->foreignIdFor(industria::class)->constrained('industrias');
            $table->foreignIdFor(tratamiento::class)->constrained('tratamientos');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('reportes');
    }
};
