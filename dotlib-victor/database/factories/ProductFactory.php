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
            'name_product' => $this->faker->word(),
            'uni_price_product' => $this->faker->randomFloat(1, 10),
            'barcode_product' => $this->faker->isbn13(),
            'qnt_product' => $this->faker->numberBetween(1, 10),
        ];
    }
}
