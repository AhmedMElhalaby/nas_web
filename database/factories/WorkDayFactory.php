<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\WorkDay;

class WorkDayFactory extends Factory
{
    protected $model = WorkDay::class;

    public function definition(): array
    {
        return [
            'name' => fake()->name(),
        ];
    }
}
