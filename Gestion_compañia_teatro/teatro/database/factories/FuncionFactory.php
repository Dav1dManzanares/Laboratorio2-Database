<?php

namespace Database\Factories;

use App\Models\Obra;
use App\Models\Elenco;
use Illuminate\Database\Eloquent\Factories\Factory;

class FuncionFactory extends Factory
{
    public function definition(): array
    {
        return [
            'obra_id' => Obra::factory(),
            'elenco_id' => Elenco::factory(),
            'lugar' => $this->faker->city(),
            'fecha' => $this->faker->dateTimeBetween('now', '+1 year'),
            'requisitos_tecnicos' => $this->faker->sentence(8),
            'adaptaciones_locales' => $this->faker->sentence(6),
        ];
    }
}
