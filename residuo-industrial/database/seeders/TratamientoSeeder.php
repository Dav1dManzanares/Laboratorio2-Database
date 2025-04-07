<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Tratamiento; // Asegúrate de importar el modelo Tratamiento

class TratamientoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $tratamientos = [
            [
                'nombre' => 'Tratamiento 1',
                'tipo' => 'Tipo A',
                'fecha_tratamiento' => '2023-01-01',
                'resultado' => 'Resultado del tratamiento 1',
            ],
            [
                'nombre' => 'Tratamiento 1',
                'tipo' => 'Tipo A',
                'fecha_tratamiento' => '2023-01-01',
                'resultado' => 'Resultado del tratamiento 1',
            ],
            [
                'nombre' => 'Tratamiento 1',
                'tipo' => 'Tipo A',
                'fecha_tratamiento' => '2023-01-01',
                'resultado' => 'Resultado del tratamiento 1',
            ],
            [
                'nombre' => 'Tratamiento 1',
                'tipo' => 'Tipo A',
                'fecha_tratamiento' => '2023-01-01',
                'resultado' => 'Resultado del tratamiento 1',
            ],
            [
                'nombre' => 'Tratamiento 1',
                'tipo' => 'Tipo A',
                'fecha_tratamiento' => '2023-01-01',
                'resultado' => 'Resultado del tratamiento 1',
            ],
            [
                'nombre' => 'Tratamiento 1',
                'tipo' => 'Tipo A',
                'fecha_tratamiento' => '2023-01-01',
                'resultado' => 'Resultado del tratamiento 1',
            ],
            [
                'nombre' => 'Tratamiento 1',
                'tipo' => 'Tipo A',
                'fecha_tratamiento' => '2023-01-01',
                'resultado' => 'Resultado del tratamiento 1',
            ],
            [
                'nombre' => 'Tratamiento 1',
                'tipo' => 'Tipo A',
                'fecha_tratamiento' => '2023-01-01',
                'resultado' => 'Resultado del tratamiento 1',
            ],
            [
                'nombre' => 'Tratamiento 1',
                'tipo' => 'Tipo A',
                'fecha_tratamiento' => '2023-01-01',
                'resultado' => 'Resultado del tratamiento 1',
            ],
            
            
        ];


        foreach ($tratamientos as $tratamiento) {
            Tratamiento::create($tratamiento); //CONSULTA DE INSERCION
        }
    }
}
