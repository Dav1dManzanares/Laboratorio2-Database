<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\tecnologias;
use App\Models\instalaciones;

class tecnologiaseeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $tecnologias = [
            [
                'instalacion_id' => 1,
                'fecha' => '2023-01-01',
                'tecnologia' => 100.00,
            ],
            [
                'instalacion_id' => 2,
                'fecha' => '2023-01-02',
                'tecnologia' => 200.00,
            ],
        ];

        foreach ($tecnologias as $tecnologia) {
            tecnologias::create($tecnologia);
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
            instalaciones::create($instalacion);
        }
    }
}
