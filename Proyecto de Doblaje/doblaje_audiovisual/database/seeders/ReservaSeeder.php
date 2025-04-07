<?php

namespace Database\Seeders;

use App\Models\Reserva;
use App\Models\Sala;
use Illuminate\Database\Seeder;

class ReservaSeeder extends Seeder
{
    public function run(): void
    {
        // Asegúrate de tener salas creadas primero
        \App\Models\Reserva::factory(5)->create();
    }
}
