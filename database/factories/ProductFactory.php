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
            'brand' => fake()->name(),
            'description' => fake()->sentence(6, true),
            'price' => fake()->numberBetween(100, 10000),
            'status' => rand(0, 1),
            'type' => rand(0, 1),
            'processor_id' => rand(1, 32),
            'ram_id' => rand(1, 5),
            'size_id' => rand(1, 15),
            'storage_id' => rand(1, 12)
        ];
    }
}
