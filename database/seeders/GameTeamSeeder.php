<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\GameTeam;

class GameTeamSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $gameTeams = [];

        foreach ($gameTeams as $gameTeam)
        {
            GameTeam::factory() -> create([
                "game_id" => $gameTeam[0],
                "team_id" => $gameTeam[1],
                "winner" => $gameTeam[2],
                "result" => $gameTeam[3],
            ]);
        }
    }
}
