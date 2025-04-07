<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class ObraFactory extends Factory
{
    public function definition(): array
    {
        return [
            'titulo' => $this->faker->sentence(3),
            'sinopsis' => $this->faker->paragraph(),
            'duracion' => $this->faker->time('H:i:s'),
            'idioma_original' => $this->faker->randomElement(['Español', 'Inglés', 'Francés']),
        ];
    }
}
