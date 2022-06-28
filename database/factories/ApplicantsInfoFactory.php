<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Model>
 */
class ApplicantsInfoFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {

        $civilStatus = $this->faker->randomElement(['Single', 'Married', 'Widowed', 'Divorced']);
        $gender = $this->faker->randomElement(['Male', 'Female']);
        $first_name = $this->faker->firstName($gender);

        return [
            'first_name' => $first_name,
            'middle_name' => $this->faker->lastName,
            'last_name' => $this->faker->lastName,
            'office' => 'Tacloban City Housing Office',
            'brgy_origin' => 'Brgy. ' . $this->faker->numberBetween(1, 200),
            'birth_date' => $this->faker->date('Y-m-d', '2000-08-10'),
            'place_of_birth' => $this->faker->address(),
            'citizenship' => "Filipino",
            'tin_no' => $this->faker->numberBetween(100000000, 999999999),
            'govt_id' => $this->faker->numberBetween(100000000, 999999999),
            'civil_status' => $civilStatus,
            'income_per_month' => $this->faker->numberBetween(3500, 25000),
            //

        ];
    }
}
