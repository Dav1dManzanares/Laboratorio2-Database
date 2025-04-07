<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\mantenimiento;
use App\Models\instalaciones;

class mantenimientoseeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $mantenimientos = [
            [
                'instalacion_id' => 1,
                'fecha' => '2023-01-01',
                'mantenimiento' => 100.00,
            ],
            [
                'instalacion_id' => 2,
                'fecha' => '2023-01-02',
                'mantenimiento' => 200.00,
            ],
        ];

        foreach ($mantenimientos as $mantenimiento) {
            mantenimiento::create($mantenimiento);
        }
    }
}
