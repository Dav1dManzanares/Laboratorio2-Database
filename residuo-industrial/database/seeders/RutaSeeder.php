<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Ruta; // Asegúrate de importar el modelo Ruta

class RutaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $rutas = [
            [
                'nombre' => 'Ruta 1',
                'descripcion' => 'Ruta de transporte desde la fábrica hasta el puerto.',
            ],
            [
                'nombre' => 'Ruta 2',
                'descripcion' => 'Ruta de transporte desde la fábrica hasta el centro de distribución.',
            ],
            [
                'nombre' => 'Ruta 3',
                'descripcion' => 'Ruta de transporte desde la fábrica hasta la tienda mayorista.',
            ],
            [
                'nombre' => 'Ruta 4',
                'descripcion' => 'Ruta de transporte desde la fábrica hasta la tienda mayorista.',
            ],
            [
                'nombre' => 'Ruta 5',
                'descripcion' => 'Ruta de transporte desde la fábrica hasta la tienda mayorista.',
            ],
            [
                'nombre' => 'Ruta 6',
                'descripcion' => 'Ruta de transporte desde la fábrica hasta la tienda mayorista.',
            ],
            [
                'nombre' => 'Ruta 7',
                'descripcion' => 'Ruta de transporte desde la fábrica hasta la tienda mayorista.',
            ],
            [
                'nombre' => 'Ruta 8',
                'descripcion' => 'Descripción de la ruta 8',
            ],
            [
                'nombre' => 'Ruta 9',
                'descripcion' => 'Descripción de la ruta 9',
            ]
            ,
            [
                'nombre' => 'Ruta 10',
                'descripcion' => 'Descripción de la ruta 10',
            ],
            [
                'nombre' => 'Ruta 11',
                'descripcion' => 'Descripción de la ruta 11',
            ],
            [
                'nombre' => 'Ruta 12',
                'descripcion' => 'Descripción de la ruta 12',
            ],
            [
                'nombre' => 'Ruta 13',
                'descripcion' => 'Descripción de la ruta 13',
            ],
            [
                'nombre' => 'Ruta 14',
                'descripcion' => 'Descripción de la ruta 14',
            ],
        ];
        foreach ($rutas as $ruta) {
            Ruta::create($ruta); //CONSULTA DE INSERCION
        }
    }
}
