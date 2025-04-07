<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class ActorFactory extends Factory
{
    public function definition(): array
    {
        return [
            'nombre' => $this->faker->name(),
            'nacionalidad' => $this->faker->country(),
            'fecha_nacimiento' => $this->faker->date('Y-m-d', '-20 years'),
        ];
    }
}
