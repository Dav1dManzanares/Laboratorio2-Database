<?php

namespace Database\Factories;

use App\Models\Instalacion;
use Illuminate\Database\Eloquent\Factories\Factory;

class MeasurementFactory extends Factory
{
    public function definition(): array
    {
        return [
            'instalacion_id' => Instalacion::factory(),
            'potencia_actual' => $this->faker->randomFloat(2, 0, 500),
            'energia_acumulada' => $this->faker->randomFloat(2, 0, 10000),
            'fecha_hora_medicion' => $this->faker->dateTimeBetween('-1 month', 'now'),
        ];
    }
}
