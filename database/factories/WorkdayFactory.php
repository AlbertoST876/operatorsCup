<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Workday>
 */
class WorkdayFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            "phase_id" => fake() -> randomNumber(),
            "name_en" => fake() -> name(),
            "name_es" => fake() -> name(),
            "abbr" => fake() -> name(),
            "date" => fake() -> date(),
        ];
    }
}
