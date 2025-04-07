<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;
use App\Models\Obra;
use App\Models\Elenco;
use App\Models\Actor;
use App\Models\Funcion;
use App\Models\Escenografia;
use App\Models\Logistica;
use App\Models\DerechoAutor;
use App\Models\Contrato;
use App\Models\Taquilla;
use App\Models\Viatico;

class DatabaseSeeder extends Seeder
{
    public function run(): void
    {
        // Usuario de prueba
        User::factory()->create([
            'name' => 'Test User',
            'email' => 'test@example.com',
        ]);

        // Crear 5 obras con todo lo relacionado
        Obra::factory(5)->create()->each(function ($obra) {
            // 1-3 elencos por obra
            $elencos = Elenco::factory(rand(1, 3))->create([
                'obra_id' => $obra->id,
            ]);

            // Escenografía
            $escenografia = Escenografia::factory()->create([
                'obra_id' => $obra->id,
            ]);

            // Logística
            Logistica::factory()->create([
                'escenografia_id' => $escenografia->id,
            ]);

            // Derechos de autor
            DerechoAutor::factory(2)->create([
                'obra_id' => $obra->id,
            ]);

            // Funciones y taquillas
            foreach ($elencos as $elenco) {
                $funciones = Funcion::factory(2)->create([
                    'obra_id' => $obra->id,
                    'elenco_id' => $elenco->id,
                ]);

                foreach ($funciones as $funcion) {
                    Taquilla::factory()->create([
                        'funcion_id' => $funcion->id,
                    ]);
                }

                // Viáticos por elenco
                Viatico::factory()->create([
                    'elenco_id' => $elenco->id,
                ]);

                // Contratos
                Contrato::factory(2)->create();

                // Crear actores y asignar a elenco
                $actores = Actor::factory(3)->create();
                foreach ($actores as $actor) {
                    $elenco->actores()->attach($actor->id, [
                        'personaje' => fake()->name()
                    ]);
                }
            }
        });
    }
}
