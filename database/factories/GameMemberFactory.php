<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Model>
 */
class GameMemberFactory extends Factory
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
            "member_id" => fake() -> randomNumber(),
            "team_id" => fake() -> randomNumber(),
            "kills" => fake() -> randomNumber(),
            "deaths" => fake() -> randomNumber(),
            "assists" => fake() -> randomNumber(),
        ];
    }
}
