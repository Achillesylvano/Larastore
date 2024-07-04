<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Accessory>
 */
class AccessoryFactory extends Factory
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
            'price' => fake()->numberBetween(20, 900),
            'status' => rand(0, 1),
            'property_id' => rand(1, 5)
        ];
    }
}
