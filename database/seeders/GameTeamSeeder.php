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
        // SEASON 2
        $gameTeams = [
            // J1 | MX vs ZP
            [1,	2, 0, 1],
            [1,	1, 1, 7],
            // J1 | ZP vs XP
            [2,	1, 0, 0],
            [2,	4, 1, 7],
            // J1 | XP vs BH
            [3,	4, 1, 7],
            [3,	5, 0, 5],
            // J2 | MX vs LXS
            [4,	2, 1, 7],
            [4,	3, 0, 5],
            // J3 | MX vs XP
            [5, 2, 1, 7],
            [5, 4, 0, 1],
            // J3 | BH vs MX
            [6, 5, 0, 5],
            [6, 2, 1, 7],
            // J4 | LXS vs ZP
            [7, 3, 0, 1],
            [7, 1, 1, 7],
            // J4 | BH vs LXS
            [8, 5, 1, 8],
            [8, 3, 0, 7],
            // J5 | ZP vs BH
            [9, 1, 1, 7],
            [9, 5, 0, 3],
            // J5 | LXS vs XP
            [10, 3, 0, 3],
            [10, 4, 1, 7],
        ];

        // SEASON 3
        // $gameTeams = [];

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
