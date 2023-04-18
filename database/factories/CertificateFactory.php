<?php

namespace Database\Factories;
use App\Models\Skill;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Certificate>
 */
class CertificateFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'name' => $this->faker->sentence,
            'Level' => $this->faker->sentence,
            'skill_id' => Skill::all()->random(),
        ];
    }
}
