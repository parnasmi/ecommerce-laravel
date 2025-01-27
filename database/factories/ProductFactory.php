<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Product>
 */
class ProductFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'category_id' => fake()->numberBetween(1, 4),
            'name' => [
                'uz' => fake()->sentence(2, 3),
                'ru' => fake()->name(),
            ],
            'description' => [
                'uz' => fake()->text(),
                'ru' => fake()->text(),
            ],
            'price' => fake()->randomFloat(2, 1, 100),
        ];
    }
}
