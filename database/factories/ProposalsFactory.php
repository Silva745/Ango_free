<?php

namespace Database\Factories;

use App\Models\projects;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\proposals>
 */
class ProposalsFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'email' => fake()->email(),
            'hours' => fake()->numberBetween(1,72),
            'project_id' => projects::factory()
        ];
    }
}
