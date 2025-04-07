<?php

namespace Database\Factories;

use App\Models\Instalacion;
use Illuminate\Database\Eloquent\Factories\Factory;

class BlockchainTransaccionFactory extends Factory
{
    public function definition(): array
    {
        return [
            'instalacion_origen_id' => Instalacion::factory(),
            'instalacion_destino_id' => Instalacion::factory(),
            'fecha' => $this->faker->dateTimeBetween('-6 months', 'now'),
            'cantidad' => $this->faker->randomFloat(2, 1, 1000),
            'hash_transaccion' => $this->faker->sha256(),
        ];
    }
}
