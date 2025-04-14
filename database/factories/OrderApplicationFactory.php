<?php

namespace Database\Factories;

use App\Enums\OrderApplicationStatus;
use App\Models\OrderItem;
use App\Models\User;

use Illuminate\Database\Eloquent\Factories\Factory;

class OrderApplicationFactory extends Factory
{
    public function definition(): array
    {
        return [
            'worker_id' => User::factory(),
            'order_id' => \App\Models\Order::factory(),
            'order_item_id' => OrderItem::factory(),
            'status' => $this->faker->randomElement(OrderApplicationStatus::cases()),
            'applied_at' => $this->faker->dateTime(),
        ];
    }
}
