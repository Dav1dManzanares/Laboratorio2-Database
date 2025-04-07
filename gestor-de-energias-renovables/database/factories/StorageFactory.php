<?php

namespace Database\Factories;

use App\Models\Instalacion;
use Illuminate\Database\Eloquent\Factories\Factory;

class StorageFactory extends Factory
{
    public function definition(): array
    {
        return [
            'instalacion_id' => Instalacion::factory(),
            'tipo_almacenamiento' => $this->faker->randomElement(['Batería', 'Hidráulico', 'Térmico']),
            'capacidad_total' => $this->faker->randomFloat(2, 100, 10000),
            'nivel_actual' => $this->faker->randomFloat(2, 0, 100),
            'eficiencia' => $this->faker->randomFloat(2, 70, 99),
        ];
    }
}
