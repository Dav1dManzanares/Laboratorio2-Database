<?php

namespace Database\Factories;

use App\Models\AprobacionCliente;
use Illuminate\Database\Eloquent\Factories\Factory;

class AprobacionClienteFactory extends Factory
{
    protected $model = AprobacionCliente::class;

    public function definition(): array
    {
        return [
            // Asignamos una versión, puede ser generada con el factory de Version
            'version_id' => \App\Models\Version::factory(),
            'aprobado' => $this->faker->boolean(),
            'fecha_aprobacion' => $this->faker->date(),
        ];
    }
}
