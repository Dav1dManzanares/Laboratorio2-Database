<?php

namespace Database\Seeders;

use App\Models\Instalacion;
use Illuminate\Database\Seeder;

class InstalacionesSeeder extends Seeder
{
    public function run(): void
    {
        $instalaciones = [
            [
                'nombre_instalacion' => 'Instalación Solar 1',
                'ubicacion' => 'Madrid Centro',
                'usuario_id' => 1,
                'tecnologia_id' => 1,
                'capacidad_instalada' => 5000.00
            ],
            // Add more installations as needed
        ];

        foreach ($instalaciones as $instalacion) {
            Instalacion::create($instalacion);
        }
    }
}
