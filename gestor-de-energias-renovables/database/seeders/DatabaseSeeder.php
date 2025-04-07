<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    public function run(): void
    {
        $this->call([
            TecnologiaSeeder::class,
        ]);

        \App\Models\User::factory(10)
            ->has(\App\Models\Instalacion::factory()->count(2))
            ->create();

        \App\Models\Node::factory(30)->create();
        \App\Models\Measurement::factory(1000)->create();
        \App\Models\WeatherData::factory(1000)->create();
        \App\Models\Balance::factory(500)->create();
        \App\Models\Storage::factory(50)->create();
        \App\Models\BlockchainTransaccion::factory(100)->create();
    }
}
