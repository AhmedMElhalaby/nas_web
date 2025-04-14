<?php

namespace Database\Factories;

use App\Models\User;
use App\Models\WorkPeriod;

use Illuminate\Database\Eloquent\Factories\Factory;

class WorkerPeriodFactory extends Factory
{
    public function definition(): array
    {
        return [            
            'user_id' => User::factory(),
            'work_period_id' => WorkPeriod::factory(),
        ];
    }
}
