<?php

namespace Database\Factories;

use App\Models\ApplicantsInfo;
use App\Models\HousingProject;
use App\Models\RealHolding;
use App\Models\Spouse;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Applicant>
 */
class ApplicantFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {


        return [
            'applicants_info_id' => ApplicantsInfo::factory(),
            'spouse_id' => Spouse::factory(),
            'housing_project_id' => HousingProject::factory(), //ray pa mag ayad factory
            'real_holding_id' => RealHolding::factory(),
            'application_status' => $this->faker->boolean(),
        ];
    }
}
