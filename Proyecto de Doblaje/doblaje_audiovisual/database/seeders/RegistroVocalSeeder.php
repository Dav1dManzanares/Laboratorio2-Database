<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Actor;
use App\Models\Personaje;
use Illuminate\Support\Facades\DB;

class RegistroVocalSeeder extends Seeder
{
    public function run(): void
    {
        $actores = Actor::all();
        $personajes = Personaje::all();

        foreach ($actores as $actor) {
            // Cada actor dobla 1 a 3 personajes
            $personajesAleatorios = $personajes->random(rand(1, 3));

            foreach ($personajesAleatorios as $personaje) {
                DB::table('registro_vocal')->insert([
                    'actor_id'     => $actor->id,
                    'personaje_id' => $personaje->id,
                    'tono'         => fake()->randomElement(['grave', 'medio', 'agudo']),
                    'idioma'       => fake()->randomElement(['español', 'inglés', 'portugués']),
                    'created_at'   => now(),
                    'updated_at'   => now(),
                ]);
            }
        }

        $this->command->info('🎤 ¡Tabla registro_vocal poblada con estilo!');
    }
}
