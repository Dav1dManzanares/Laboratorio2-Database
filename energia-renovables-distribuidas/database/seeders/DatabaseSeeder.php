<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Instalacion;
use App\Models\Almacenamiento;
use App\Models\Tecnologia;
use App\Models\usuario;

class DatabaseSeeder extends Seeder
{
    public function run(): void
    {
        $this->call([
            UserSeeder::class,
            TecnologiaSeeder::class,
            InstalacionesSeeder::class,
            AlmacenamientoSeeder::class,
            // Add other seeders here in the correct order
        ]);
    }
}

class InstalacionesSeeder extends Seeder
{
    public function run(): void
    {
        $instalaciones = [
            // ...your existing data...
        ];

        foreach ($instalaciones as $instalacion) {
            Instalacion::create($instalacion);
        }
    }
}

class AlmacenamientoSeeder extends Seeder
{
    public function run(): void
    {
        $almacenamientos = [
            [
                'instalacion_id' => 1,
                'fecha' => '2023-01-01',
                'capacidad_almacenada' => 100.00
            ],
            // Add more data as needed
            [
                'instalacion_id' => 2,
                'fecha' => '2023-02-01',
                'capacidad_almacenada' => 150.00
            ],
        ];

        foreach ($almacenamientos as $almacenamiento) {
            Almacenamiento::create($almacenamiento);
        }
    }
}
