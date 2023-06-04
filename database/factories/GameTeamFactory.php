<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\GameTeam>
 */
class GameTeamFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            "game_id" => fake() -> randomNumber(),
            "team_id" => fake() -> randomNumber(),
            "winner" => fake() -> boolean(),
            "result" => fake() -> randomNumber(),
        ];
    }
}
