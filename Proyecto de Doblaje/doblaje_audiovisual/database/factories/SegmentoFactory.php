<?php

namespace Database\Factories;

use App\Models\Segmento;
use Illuminate\Database\Eloquent\Factories\Factory;

class SegmentoFactory extends Factory
{
    
/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Segmento>
 */
    protected $model = Segmento::class;

    public function definition(): array
    {
        return [
            'descripcion' => $this->faker->sentence(),
            // Asignamos un proyecto existente o generamos uno nuevo
            'proyecto_id' => \App\Models\Proyecto::factory(),
        ];
    }
}
