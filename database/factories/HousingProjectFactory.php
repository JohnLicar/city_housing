<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\HousingProject>
 */
class HousingProjectFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'location' => $this->faker->address(),
            'project' => $this->faker->word(),
            'description' => $this->faker->sentence(),
        ];
    }
}
