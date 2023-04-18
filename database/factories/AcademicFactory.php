<?php

namespace Database\Factories;
use App\Models\Project;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Academic>
 */
class AcademicFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'clgname' => $this->faker->sentence,
            'degree' => $this->faker->sentence,
            'course' => $this->faker->sentence,
            'description' => $this->faker->paragraph,
            'project_id' => Project::all()->random(),
        ];
    }
}
