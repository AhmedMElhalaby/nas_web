<?php

namespace Database\Factories;
use App\Models\ReferralSource;
use Illuminate\Database\Eloquent\Factories\Factory;

class ReferralSourceFactory extends Factory
{
    protected $model = ReferralSource::class;

    public function definition(): array
    {
        return [ 
            'name' => fake()->name()
        ];
    }
}
