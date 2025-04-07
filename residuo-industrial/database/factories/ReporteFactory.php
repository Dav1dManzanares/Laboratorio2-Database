<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\reporte>
 */
class ReporteFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'nombre' => $this->faker->word(),
            'descripcion' => $this->faker->sentence(),
            'fecha' => $this->faker->date(),
            'huella_carbono_id' => $this->faker->numberBetween(1, 5),
            'industria_id' => $this->faker->numberBetween(1, 5),
            'tratamiento_id' => $this->faker->numberBetween(1, 5),
        ];
    }
}
