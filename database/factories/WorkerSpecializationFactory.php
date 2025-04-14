<?php

namespace Database\Factories;
use App\Models\User;
use App\Models\Specialization;
use Illuminate\Database\Eloquent\Factories\Factory;

class WorkerSpecializationFactory extends Factory
{

    public function definition(): array
    {
        return [
            'user_id' => User::factory(),
            'specialization_id' => Specialization::factory(),
        ];
    }
}
