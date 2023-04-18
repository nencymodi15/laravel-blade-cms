<?php

namespace Database\Factories;
use App\Models\Project;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Experience>
 */
class ExperienceFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'CompanyName' => $this->faker->sentence,
            'yearsofexperiance' => $this->faker->sentence,
            'position' => $this->faker->sentence,
            'project_id' => Project::all()->random(),
        ];
    }
}
