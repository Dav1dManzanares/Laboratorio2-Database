<?php

namespace Database\Factories;

use App\Models\Version;
use Illuminate\Database\Eloquent\Factories\Factory;

class VersionFactory extends Factory
{
    protected $model = Version::class;
    
/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Version>
 */
    public function definition(): array
    {
        return [
            'numero_version' => $this->faker->numberBetween(1, 10),
            // Asumimos que cada versión pertenece a un segmento
            'segmento_id' => \App\Models\Segmento::factory(),
            'fecha_creacion' => $this->faker->date(),
        ];
    }
}
