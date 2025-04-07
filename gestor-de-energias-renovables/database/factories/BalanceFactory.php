<?php

namespace Database\Factories;

use App\Models\Instalacion;
use Illuminate\Database\Eloquent\Factories\Factory;

class BalanceFactory extends Factory
{
    public function definition(): array
    {
        $energia_generada = $this->faker->randomFloat(2, 0, 1000);
        $energia_consumida = $this->faker->randomFloat(2, 0, 800);
        
        return [
            'instalacion_id' => Instalacion::factory(),
            'energia_generada' => $energia_generada,
            'energia_consumida' => $energia_consumida,
            'balance_neto' => $energia_generada - $energia_consumida,
            'fecha' => $this->faker->dateTimeBetween('-1 year', 'now'),
        ];
    }
}
