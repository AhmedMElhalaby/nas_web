<?php

namespace Database\Factories;
use App\Models\User;
use App\Models\WorkDay;
use Illuminate\Database\Eloquent\Factories\Factory;

class WorkerDayFactory extends Factory
{
    public function definition(): array
    {
        return [
            'user_id' => User::factory(),
            'work_day_id' => WorkDay::factory(),
        ];
    }
}
