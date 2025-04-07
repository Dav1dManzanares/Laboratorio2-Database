<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Segmento;

class SegmentoSeeder extends Seeder
{
    public function run(): void
    {
        // Genera 10 segmentos
        \App\Models\Segmento::factory(3)->create();
    }
}
