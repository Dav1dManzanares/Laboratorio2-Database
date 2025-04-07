<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\huellacarbono>
 */
class HuellaCarbonoFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'emicion' => $this->faker->randomFloat(2, 0, 100),
            'fecha' => $this->faker->date(),
            'vehiculo_id' => $this->faker->numberBetween(1, 3),
        ];
    }
}
