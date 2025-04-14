<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends Factory<\App\Models\StaticPage>
 */
class StaticPageFactory extends Factory
{
    public function definition(): array
    {
        return [            
            'slug' => fake()->slug,
            'title' => fake()->sentence,
            'content' => fake()->paragraph(3),
        ];
    }
}
