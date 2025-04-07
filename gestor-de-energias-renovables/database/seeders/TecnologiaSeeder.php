<?php

namespace Database\Seeders;

use App\Models\Tecnologia;
use Illuminate\Database\Seeder;

class TecnologiaSeeder extends Seeder
{
    public function run(): void
    {
        $tecnologias = [
            [
                'tipo_tecnologia' => 'Solar Fotovoltaica',
                'descripcion' => 'Paneles solares que convierten la luz solar en electricidad'
            ],
            [
                'tipo_tecnologia' => 'Eólica',
                'descripcion' => 'Turbinas que aprovechan la energía del viento'
            ],
            [
                'tipo_tecnologia' => 'Biomasa',
                'descripcion' => 'Generación de energía a partir de materia orgánica'
            ],
            [
                'tipo_tecnologia' => 'Hidroeléctrica',
                'descripcion' => 'Generación mediante el aprovechamiento de corrientes de agua'
            ],
        ];

        foreach ($tecnologias as $tecnologia) {
            Tecnologia::create($tecnologia);
        }
    }
}
