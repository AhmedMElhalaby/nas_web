<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends Factory<\App\Models\AdminLog>
 */
class AdminLogFactory extends Factory
{
    public function definition(): array
    {
        return [
            'admin_id' => \App\Models\User::factory(),
            'action' => fake()->word,
            'target_table' => fake()->word,
            'target_id' => fake()->numberBetween(1, 100),
            'metadata' => fake()->randomElement([null, ['key' => fake()->word]]),
        ];
    }
}
