<?php

namespace Database\Factories;

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
            'product_name' => $this->faker->company(),
            'cost_price' => $this->faker->randomDigitNotZero(),
            'selling_price' => $this->faker->randomDigitNotZero(),
            'quantity' => $this->faker->randomNumber(),
        ];
    }
}
