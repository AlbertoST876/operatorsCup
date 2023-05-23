<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Game>
 */
class GameFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            "set" => fake() -> randomNumber(),
            "winner" => fake() -> randomNumber(),
            "loser" => fake() -> randomNumber(),
            "wResult" => fake() -> randomNumber(),
            "lResult" => fake() -> randomNumber(),
            "overtime" => fake() -> boolean(),
        ];
    }
}
