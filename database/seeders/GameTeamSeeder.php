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
        $gameTeams = [
            // J1 | MX vs ZP
            [1,	2, 0, 1],
            [1,	1, 1, 7],

            // J1 | ZP vs XP
            [3,	1, 0, 0],
            [3,	5, 1, 7],

            // J1 | XP vs BH
            [4,	5, 1, 7],
            [4,	7, 0, 5],

            // J2 | MX vs LXS
            [8,	2, 1, 7],
            [8,	4, 0, 5],

            // J3 | MX vs XP
            [13, 2, 1, 7],
            [13, 5, 0, 1],

            // J3 | BH vs MX
            [14, 7, 0, 5],
            [14, 2, 1, 7],

            // J4 | LXS vs ZP
            [16, 4, 0, 1],
            [16, 1, 1, 7],

            // J4 | BH vs LXS
            [18, 7, 1, 8],
            [18, 4, 0, 7],

            // J5 | ZP vs BH
            [19, 1, 1, 7],
            [19, 7, 0, 3],

            // J5 | LXS vs XP
            [20, 4, 0, 3],
            [20, 5, 1, 7],
        ];

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
