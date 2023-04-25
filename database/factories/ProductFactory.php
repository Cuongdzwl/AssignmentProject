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
    public function definition()
    {
        return [
            'name' => $this->faker->name(),
            'description' => $this->faker->text(),
            'price' => $this->faker->randomFloat(2,10,100000),
            'image' => $this->faker->randomElement(['images/food/baked-pancakes.jpg', 'images/food/blueberry-toast-bread.jpg', 'images/food/pesto-pasta.jpg']),
            'quantity' => $this->faker->randomNumber(3),
        ];
    }
}
