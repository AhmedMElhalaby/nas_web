<?php

namespace Database\Factories;

use App\Models\User;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Violation>
 */
class ViolationFactory extends Factory {
	public function definition(): array {
		return [
			'worker_id' => User::factory(),
			'reason' => $this->faker->sentence(),
			'notes' => $this->faker->paragraph(),
			'issued_at' => $this->faker->dateTime(),
			'expires_at' => $this->faker->optional()->dateTime(),
		];
	}
}
