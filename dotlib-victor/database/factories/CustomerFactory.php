<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class CustomerFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'name_customer' => $this->faker->name(),
            'cpf_customer' => $this->faker->numberBetween(10000000000, 99999999999),
            'email_customer' => $this->faker->freeEmail(),
        ];
    }
}
