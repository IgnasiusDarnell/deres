<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\Category;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Item>
 */
class ItemFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'name' => $this->faker->word(),
            'price' => $this->faker->randomFloat(2, 1000, 1000000),
            'category_id' => Category::inRandomOrder()->first()->id,
            'description' => $this->faker->sentence(),
            'image' => $this->faker->imageUrl(),
            'is_active' => $this->faker->boolean(80),
        ];
    }
}
