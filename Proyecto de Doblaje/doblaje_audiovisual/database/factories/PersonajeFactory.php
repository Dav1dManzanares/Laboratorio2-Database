<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Personaje>
 */
class PersonajeFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    protected $model = \App\Models\Personaje::class;
    public function definition(): array
    {
        return [
            'nombre' => $this->faker->firstName(),
            'descripcion' => $this->faker->sentence(),
            'proyecto_id' => \App\Models\Proyecto::factory()
            
        ];
    }
}
