<?php

namespace Database\Factories;
use App\Models\Order;
use App\Models\OrderItem;
use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;

class ReviewFactory extends Factory
{
    public function definition(): array
    {
        return [
            'worker_id' => User::factory(),
            'order_id' => Order::factory(),
            'order_item_id' => OrderItem::factory(),
            'rate' => $this->faker->numberBetween(1, 5),
            'review' => $this->faker->text,
            'reviewed_at' => $this->faker->dateTime,
        ];
    }
}
