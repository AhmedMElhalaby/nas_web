<?php
namespace Database\Factories;

use App\Enums\PaymentMethod;
use App\Models\Order;
use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;

class PaymentFactory extends Factory
{
    public function definition(): array
    {
        return [
            'order_id' => Order::factory(),
            'client_id' => User::factory(),
            'amount' => $this->faker->randomFloat(2, 10, 1000),
            'currency' => $this->faker->currencyCode(),
            'payment_method' => $this->faker->randomElement(PaymentMethod::cases()),
            'transaction_id' => $this->faker->uuid(),
            'status' => $this->faker->word(),
            'paid_at' => $this->faker->dateTime(),
        ];
    }
}
