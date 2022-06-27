<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Spouse>
 */
class SpouseFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        $gender = $this->faker->randomElement(['Male', 'Female']);
        $first_name = $this->faker->firstName($gender);

        return [
            'first_name' => $first_name,
            'middle_name' => $this->faker->lastName,
            'last_name' => $this->faker->lastName,
        ];
    }
}
