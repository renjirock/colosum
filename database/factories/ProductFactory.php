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
            'title' => $this->faker->sentence(),
            'description' => $this->faker->text(),
            'SKU' => $this->faker->regexify('[A-Z]{5}[0-4]{3}'),
            'user_id' => 1,
            'price' => $this->faker->randomDigit(),
            'qty' => $this->faker->randomDigit(),
            'is_active' => true,
            'image' => $this->faker->imageUrl($width = 200, $height = 200)
        ];
    }
}
