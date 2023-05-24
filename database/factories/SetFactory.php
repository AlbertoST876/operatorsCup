<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Set>
 */
class SetFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            "mapban" => null,
            "workday" => fake() -> randomNumber(),
            "winner" => fake() -> randomNumber(),
            "loser" => fake() -> randomNumber(),
            "datetime" => fake() -> dateTime(),
            "active" => fake() -> boolean(),
        ];
    }
}
