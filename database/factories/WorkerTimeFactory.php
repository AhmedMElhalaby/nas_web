<?php

namespace Database\Factories;

use App\Models\User;
use App\Models\WorkTime;
use Illuminate\Database\Eloquent\Factories\Factory;

class WorkerTimeFactory extends Factory
{
    public function definition(): array
    {
        return [
            'user_id' => User::factory(),
            'work_time_id' => WorkTime::factory(),
        ];
    }
}
