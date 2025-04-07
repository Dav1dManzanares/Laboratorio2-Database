<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Almacenamiento;

class AlmacenamientoSeeder extends Seeder
{
    public function run(): void
    {
        $almacenamientos = [
            [
                'instalacion_id' => 1,
                'fecha' => '2023-01-01',
                'almacenamiento' => 100.00,
            ],
            [
                'instalacion_id' => 2,
                'fecha' => '2023-01-02',
                'almacenamiento' => 200.00,
            ],
        ];

        foreach ($almacenamientos as $almacenamiento) {
            Almacenamiento::create($almacenamiento);
        }
        $instalaciones = [
            [
                'name' => 'Instalacion 1',
                'location' => 'Location 1',
            ],
            [
                'name' => 'Instalacion 2',
                'location' => 'Location 2',
            ],
        ];
        foreach ($instalaciones as $instalacion) {
            Instalacion::create($instalacion);
        }
    }
}
