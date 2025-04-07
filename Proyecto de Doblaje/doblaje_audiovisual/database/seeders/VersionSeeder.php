<?php

namespace Database\Seeders;

use App\Models\Version;
use App\Models\Segmento;
use Illuminate\Database\Seeder;

class VersionSeeder extends Seeder
{
    public function run(): void
    {
        \App\Models\Version::factory(3)->create();
    }
}
