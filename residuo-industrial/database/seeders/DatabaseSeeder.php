<?php

namespace Database\Seeders;

use App\Models\HuellaCarbono;
use App\Models\reporte;
use App\Models\residuo;
use App\Models\transporte;
use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use App\Models\vehiculo;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // User::factory(10)->create();

        User::factory()->create([
            'name' => 'Test User',
            'email' => 'test@example.com',


        ]);

        $this->call([
            IndustriaSeeder::class,
            RutaSeeder::class,
            TratamientoSeeder::class,
        ]);

        // Crear datos con factories
        vehiculo::factory(20)->create();
        residuo::factory(50)->create(); // Asegúrate de corregir el factory primero
        
        // Crear transportes y su huella de carbono
        transporte::factory(30)->create()->each(function($transporte) {
            HuellaCarbono::factory()->create(['transporte_id' => $transporte->id]);
        });
        
        reporte::factory(25)->create();


    }
}
