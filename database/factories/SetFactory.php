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
            "workday_id" => fake() -> randomNumber(),
            "state_id" => fake() -> randomNumber(),
            "youtube" => "https://youtube.com/",
            "datetime" => fake() -> dateTime(),
            "active" => fake() -> boolean(),
        ];
    }
}
