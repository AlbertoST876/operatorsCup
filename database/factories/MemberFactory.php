<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Member>
 */
class MemberFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            "role_id" => fake() -> randomNumber(),
            "team_id" => fake() -> randomNumber(),
            "nickname" => fake() -> name(),
            "discord" => "https://discord.com/",
            "twitter" => "https://twitter.com/",
            "twitch" => "https://twitch.com/",
            "youtube" => "https://youtube.com/",
            "birthday" => fake() -> date(),
            "active" => fake() -> boolean(),
        ];
    }
}
