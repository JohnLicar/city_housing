<?php

namespace Database\Factories;

use App\Models\Applicant;
use App\Models\RealHolding;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Model>
 */
class ApplicantRealHoldingsFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'applicants_id' => $this->faker->numberBetween(1, 100),
            'real_holdings_id' => $this->faker->numberBetween(1, 3),

        ];
    }
}
