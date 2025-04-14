<?php

namespace Database\Factories;
use Illuminate\Support\Str;
use Illuminate\Database\Eloquent\Factories\Factory;

class NationalityFactory extends Factory
{
    public function definition(): array
    {
        return [
            'name' => fake()->name(),
            'code' => fake()->countryCode()
        ];
    }
}
