<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\SetTeam;

class SetTeamSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $setTeams = [
            // J1 | MX vs ZP
            [1,	2],
            [1,	1],

            // J1 | ZP vs XP
            [3,	1],
            [3,	5],

            // J1 | XP vs BH
            [5,	5],
            [5,	7],

            // J2 | MX vs LXS
            [9,	2],
            [9,	4],

            // J3 | MX vs XP
            [14, 2],
            [14, 5],

            // J3 | BH vs MX
            [15, 7],
            [15, 2],

            // J4 | LXS vs ZP
            [17, 4],
            [17, 1],

            // J4 | BH vs LXS
            [19, 7],
            [19, 4],

            // J5 | ZP vs BH
            [20, 1],
            [20, 7],

            // J5 | LXS vs XP
            [21, 4],
            [21, 5],
        ];

        foreach ($setTeams as $setTeam)
        {
            SetTeam::factory() -> create([
                "set_id" => $setTeam[0],
                "team_id" => $setTeam[1],
            ]);
        }
    }
}
