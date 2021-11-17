<?php

namespace Database\Factories;

use App\Models\Customer;
use App\Models\Product;
use Illuminate\Database\Eloquent\Factories\Factory;

class DemandFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        $status = $this->faker->randomElements(['open', 'paid', 'canceled']);

        return [
            'product_id' => Product::factory(),
            'customer_id' => Customer::factory(),
            'status' => strval($status[0]),
            'discount' => $this->faker->numberBetween(0, 100),
        ];
    }
}
