<?php

namespace Database\Factories;

use App\Models\Obra;
use Illuminate\Database\Eloquent\Factories\Factory;

class EscenografiaFactory extends Factory
{
    public function definition(): array
    {
        return [
            'obra_id' => Obra::factory(),
            'descripcion' => $this->faker->paragraph(),
            'dimensiones' => $this->faker->randomElement(['3x5m', '5x7m', '4x6m']),
            'peso' => $this->faker->randomFloat(2, 50, 200),
        ];
    }
}
