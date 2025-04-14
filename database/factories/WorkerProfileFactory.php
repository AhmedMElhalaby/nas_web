<?php

namespace Database\Factories;

use App\Enums\Gender;
use App\Enums\MaritalStatus;
use App\Models\Nationality;
use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;

class WorkerProfileFactory extends Factory
{
    public function definition(): array
    {
        return [
            'user_id' => User::factory(),
            'first_name' => $this->faker->firstName,
            'second_name' => $this->faker->firstName,
            'third_name' => $this->faker->firstName,
            'last_name' => $this->faker->lastName,
            'referral_source' => $this->faker->word,
            'birthdate' => $this->faker->date,
            'governorate' => $this->faker->city,
            'district' => $this->faker->city,
            'location' => $this->faker->address,
            'location_lat' => $this->faker->latitude,
            'location_long' => $this->faker->longitude,
            'nationality_id' => Nationality::factory(),
            'national_id' => $this->faker->unique()->numerify('##########'),
            'gender' => $this->faker->randomElement(Gender::cases())->value,
            'marital_status' => $this->faker->randomElement(MaritalStatus::cases())->value,
            'avg_rate' => $this->faker->randomFloat(2, 0, 5),
            'total_worked_hours' => $this->faker->numberBetween(0, 1000),
        ];
    }
}
