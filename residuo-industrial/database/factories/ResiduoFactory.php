<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\residuo>
 */
class ResiduoFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'tipo_residuo' => $this->faker->word(),
            'cantidad' => $this->faker->randomFloat(2, 0, 100),
            'fecha_generada' => $this->faker->date(),
        ];
    }
}
