<?php

namespace Database\Factories;

use App\Enums\Gender;
use App\Models\Nationality;
use App\Models\Order;
use App\Models\Specialization;

use Illuminate\Database\Eloquent\Factories\Factory;

class OrderItemFactory extends Factory
{
    public function definition(): array
    {
        return [
            'order_id' => Order::factory(),
            'specialization_id' => Specialization::factory(),
            'quantity' => $this->faker->numberBetween(1, 5),
            'gender_preference' => $this->faker->randomElement(Gender::cases())->value,
            'nationality_preference' => Nationality::factory(),
        ];
    }
}
