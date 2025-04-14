<?php
namespace Database\Factories;

use App\Enums\OrderStatus;
use App\Models\User;
use App\Models\WorkPeriod;
use Illuminate\Database\Eloquent\Factories\Factory;

class OrderFactory extends Factory
{
    public function definition(): array
    {
        return [
            'client_id' => User::factory(),
            'work_period_id' => WorkPeriod::factory(),
            'scheduled_date' => $this->faker->date(),
            'time_slot' => $this->faker->time(),
            'notes' => $this->faker->paragraph(),
            'tax_amount' => $this->faker->randomFloat(2, 0, 100),
            'total_price' => $this->faker->randomFloat(2, 100, 1000),
            'status' => $this->faker->randomElement(OrderStatus::cases()),
        ];
    }
}
