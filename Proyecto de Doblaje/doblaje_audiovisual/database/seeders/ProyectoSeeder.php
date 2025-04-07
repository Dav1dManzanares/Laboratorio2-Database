<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Proyecto;

class ProyectoSeeder extends Seeder
{
    public function run(): void
    {
        // Crea 5 proyectos
        Proyecto::factory(5)->create();
    }
}
