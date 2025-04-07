<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Actor;

class ActorSeeder extends Seeder
{
    public function run(): void
    {
        // Crea 10 actores usando la factory
        Actor::factory(10)->create();
    }
}
