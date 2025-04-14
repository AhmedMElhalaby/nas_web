<?php

namespace Database\Factories;

use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;

class WorkerDocumentFactory extends Factory
{
    public function definition(): array
    {
        return [
            'user_id' => User::factory(),
            'id_front_image' => fake()->imageUrl(),
            'id_back_image' => fake()->imageUrl(),
            'personal_photo' => fake()->imageUrl(),
        ];
    }
}
