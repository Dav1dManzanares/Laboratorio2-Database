<?php

namespace Database\Factories;

use App\Models\Instalacion;
use Illuminate\Database\Eloquent\Factories\Factory;

class WeatherDataFactory extends Factory
{
    public function definition(): array
    {
        return [
            'instalacion_id' => Instalacion::factory(),
            'temperatura' => $this->faker->randomFloat(2, -10, 45),
            'radiacion_solar' => $this->faker->randomFloat(2, 0, 1200),
            'velocidad_viento' => $this->faker->randomFloat(2, 0, 100),
            'precipitacion' => $this->faker->randomFloat(2, 0, 500),
            'fecha_hora' => $this->faker->dateTimeBetween('-1 year', 'now'),
        ];
    }
}
