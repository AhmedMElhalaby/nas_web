<?php
namespace Database\Factories;

use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;

class FavoriteFactory extends Factory
{
    public function definition(): array
    {
        return [            
            'client_id' => User::factory()->create(['role'=>'client']),
            'worker_id' => User::factory()->create(['role'=>'worker']),
        ];
    }
}
