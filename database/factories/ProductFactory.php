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
            'name'=>fake()->name(),
            'category_id'=>fake()->randomElement([1,3,12]),
            'price'=>fake()->randomDigit,
            'quantity'=>fake()->numberBetween(1,50),
            'description'=>fake()->text(20),
            // 'image'=>fake()->image(null, 360, 360, 'animals', true, true, 'cats', true)
        ];
    }
}
