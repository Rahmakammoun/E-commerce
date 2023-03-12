<?php

namespace Database\Factories;

use App\Models\Category;
use Illuminate\Database\Eloquent\Factories\Factory;

class ProductFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            "label" => $this->faker->name,
            "prix" => $this->faker->randomDigit,
            "category_id" => Category::all()->random()->id,
        ];
    }
}
