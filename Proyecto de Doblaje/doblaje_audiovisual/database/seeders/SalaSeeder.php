<?php

namespace Database\Seeders;

use App\Models\Sala;
use App\Models\Reserva;
use Illuminate\Database\Seeder;

class SalaSeeder extends Seeder
{
    public function run(): void
    {
        Sala::factory(5)->create(); // 5 salas
    }
}
