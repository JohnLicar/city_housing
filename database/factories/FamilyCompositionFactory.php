<?php

namespace Database\Factories;

use App\Models\Applicant;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\FamilyComposition>
 */
class FamilyCompositionFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        $civilStatus = $this->faker->randomElement(['Single', 'Married', 'Widowed', 'Divorced']);
        $gender      = $this->faker->randomElement(['Male', 'Female']);
        $first_name  = $this->faker->firstName($gender);
        $relation    = $this->faker->randomElement(['Parent', 'Spouse', 'Brother', 'Sister', 'Cousin', 'Nephew']);
        $source_of_income    = $this->faker->randomElement(['Freelance', 'Self Employed', 'Goverment Employee', 'Private Employee']);


        return [
            'first_name'    => $first_name,
            'middle_name'   => $this->faker->lastName,
            'last_name'     => $this->faker->lastName,
            'relation'      => $relation,
            'civil_status'  => $civilStatus,
            'age'           => $this->faker->numberBetween(1, 100),
            'source_of_income' => $source_of_income,
            'applicant_id' => Applicant::factory(),
        ];
    }
}
