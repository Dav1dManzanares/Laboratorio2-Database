<?php

namespace Database\Factories;

use App\Models\Sala;
use Illuminate\Database\Eloquent\Factories\Factory;

class SalaFactory extends Factory
{
    /**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Sala>
 */

    protected $model = Sala::class;

    public function definition(): array
    {
        return [
            'nombre' => $this->faker->word(),
            'ubicacion' => $this->faker->address(),
            'capacidad' => $this->faker->numberBetween(10, 100),
        ];
    }
}
