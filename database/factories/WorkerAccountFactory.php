<?php

namespace Database\Factories;

use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;

class WorkerAccountFactory extends Factory
{
    public function definition(): array
    {
        return [
            'user_id' => User::factory(),
            'holder_name' => $this->faker->name,
            'institution_name' => $this->faker->company,
            'wallet_number' => $this->faker->bankAccountNumber,
        ];
    }
}
