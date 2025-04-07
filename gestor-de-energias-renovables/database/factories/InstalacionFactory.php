<?php

namespace Database\Factories;

use App\Models\User;
use App\Models\Tecnologia;
use Illuminate\Database\Eloquent\Factories\Factory;

class InstalacionFactory extends Factory
{
    public function definition(): array
    {
        return [
            'nombre_instalacion' => $this->faker->company(),
            'ubicacion' => $this->faker->address(),
            'usuario_id' => User::factory(),
            'tecnologia_id' => Tecnologia::factory(),
            'capacidad_instalada' => $this->faker->randomFloat(2, 100, 10000),
        ];
    }
}
