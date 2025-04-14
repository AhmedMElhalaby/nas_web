<?php
namespace Database\Factories;

use App\Enums\NotificationType;
use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;

class NotificationFactory extends Factory
{
    public function definition(): array
    {
        return [
            'user_id' => User::factory(),
            'type' => $this->faker->randomElement(NotificationType::cases()),
            'title' => $this->faker->sentence,
            'body' => $this->faker->paragraph,
            'read_at' => $this->faker->optional()->dateTime(),
        ];
    }
}
