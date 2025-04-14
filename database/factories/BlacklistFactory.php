<?php
namespace Database\Factories;

use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;

class BlacklistFactory extends Factory
{
    public function definition(): array
    {
        return [
            'client_id' => User::factory(),
            'worker_id' => User::factory(),
        ];
    }
}
