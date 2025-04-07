<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\transporte>
 */
class TransporteFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'fecha' => $this->faker->date(),
            'vehiculo_id' => $this->faker->numberBetween(1, 3),
            'residuo_id' => $this->faker->numberBetween(1, 3),
            'ruta_id' => $this->faker->numberBetween(1, 3),
        ];
    }
}
