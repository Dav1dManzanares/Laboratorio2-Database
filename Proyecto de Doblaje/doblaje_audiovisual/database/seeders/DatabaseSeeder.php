<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;
use App\Models\Actor;
use App\Models\Personaje;
use App\Models\Proyecto;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // Usuario de prueba
        User::truncate(); 
        User::factory()->create([
            'name'  => 'Test User',
            'email' => 'test@example.com',
        ]);
        $this->command->info('✅ ¡Usuario de prueba creado!');

        // Datos principales
        Proyecto::factory(5)->create();
        Actor::factory(10)->create();
        Personaje::factory(15)->create();

        $this->command->info('✅ ¡Proyectos, actores y personajes de prueba creados!');

        // Llamar a seeders adicionales
        $this->call([
            SegmentoSeeder::class,
            VersionSeeder::class,
            AprobacionClienteSeeder::class,
            SalaSeeder::class,
            ReservaSeeder::class,
            RegistroVocalSeeder::class, // 💥 este es el nuevo que debes crear
        ]);

        $this->command->info('✅ ¡Seeders adicionales ejecutados!');
    }
}
