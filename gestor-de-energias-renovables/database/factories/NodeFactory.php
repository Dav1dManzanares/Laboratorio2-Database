<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class NodeFactory extends Factory
{
    public function definition(): array
    {
        return [
            'node_address' => $this->faker->uuid(),
            'node_type' => $this->faker->randomElement(['sensor', 'controller', 'gateway']),
            'is_active' => $this->faker->boolean(80),
            'configuration' => [
                'interval' => $this->faker->numberBetween(1, 60),
                'threshold' => $this->faker->randomFloat(2, 0, 100),
                'mode' => $this->faker->randomElement(['auto', 'manual'])
            ],
        ];
    }
}
