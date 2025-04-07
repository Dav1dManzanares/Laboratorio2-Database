<?php

namespace Database\Factories;

use App\Models\Reserva;
use Illuminate\Database\Eloquent\Factories\Factory;

class ReservaFactory extends Factory
{
    /**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Reserva>
 */
    protected $model = Reserva::class;

    public function definition(): array
    {
        return [
            'sala_id' => \App\Models\Sala::factory(),
            'fecha_reserva' => $this->faker->date(),
            'hora_inicio' => $this->faker->time(),
            'hora_fin' => $this->faker->time(),
            'nivel_complejidad' => $this->faker->randomElement(['Baja', 'Media', 'Alta']),
        ];
    }
}
