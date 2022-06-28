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
            'spouse_first_name' => $first_name,
            'spouse_middle_name' => $this->faker->lastName,
            'spouse_last_name' => $this->faker->lastName,
            'spouse_birth_date' => $this->faker->date('Y-m-d', '2000-08-10'),
            'spouse_place_of_birth' => $this->faker->address(),
        ];
    }
}
