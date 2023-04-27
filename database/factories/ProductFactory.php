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
            'description' => $this->faker->text(350),
            'price' => $this->faker->randomFloat(2,10,1000),
            'image' => $this->faker->randomElement(['/images/food/baked-pancakes.jpg', 'images/food/blueberry-toast-bread.jpg', '/images/food/sandwich-with-boiled-egg.jpg
            ','/images/food/strawberry-yogurt.jpg','/images/accessory/black-tote-bag.jpg','/images/accessory/brown-framed-eyeglasses.jpg','/images/accessory/brown-leather-handbag.jpg']),
            'quantity' => $this->faker->randomNumber(3),
        ];
    }
}
