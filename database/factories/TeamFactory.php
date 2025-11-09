<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Team>
 */
class TeamFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            "name" => fake() -> name(),
            "abbr" => fake() -> randomLetter() . fake() -> randomLetter() . fake() -> randomLetter(),
            "logo" => null,
            "email" => fake() -> email(),
            "tel" => fake() -> phoneNumber(),
            "discord" => "https://discord.gg/",
            "x" => "https://x.com/",
            "twitch" => "https://twitch.tv/",
            "youtube" => "https://youtube.com/",
            "active" => fake() -> boolean(),
        ];
    }
}
