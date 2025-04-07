<?php

namespace Database\Factories;

use App\Models\Proyecto;
use Illuminate\Database\Eloquent\Factories\Factory;
/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Proyecto>
 */
class ProyectoFactory extends Factory
{
    protected $model = Proyecto::class;

    public function definition(): array
    {
        return [
            'titulo' => $this->faker->sentence(3),
            'cliente' => $this->faker->company(),
            'acento_requerido' => $this->faker->word(),
            'adaptacion_cultural' => $this->faker->boolean(),
            'fecha_inicio' => $this->faker->date(),
            'fecha_fin' => $this->faker->date(),
        ];
    }
}
