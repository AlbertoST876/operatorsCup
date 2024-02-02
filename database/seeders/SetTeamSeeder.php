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
        // SEASON 2
        $setTeams = [
            // J1 | MX vs ZP
            [1,	2],
            [1,	1],
            // J1 | ZP vs XP
            [2,	1],
            [2,	4],
            // J1 | XP vs BH
            [3,	4],
            [3,	5],
            // J2 | MX vs LXS
            [4,	2],
            [4,	3],
            // J3 | MX vs XP
            [5, 2],
            [5, 4],
            // J3 | BH vs MX
            [6, 5],
            [6, 2],
            // J4 | LXS vs ZP
            [7, 3],
            [7, 1],
            // J4 | BH vs LXS
            [8, 5],
            [8, 3],
            // J5 | ZP vs BH
            [9, 1],
            [9, 5],
            // J5 | LXS vs XP
            [10, 3],
            [10, 4],
        ];

        // SEASON 3
        // $setTeams = [
        //     [1,  7],
        //     [1,  1],
        //     [2,  6],
        //     [2,  5],
        //     [3,  2],
        //     [3,  8],
        //     [4,  4],
        //     [4,  3],
        //     [5,  5],
        //     [5,  1],
        //     [6,  7],
        //     [6,  2],
        //     [7,  3],
        //     [7,  6],
        //     [8,  8],
        //     [8,  4],
        //     [9,  2],
        //     [9,  1],
        //     [10, 5],
        //     [10, 3],
        //     [11, 4],
        //     [11, 7],
        //     [12, 6],
        //     [12, 8],
        //     [13, 3],
        //     [13, 1],
        //     [14, 2],
        //     [14, 4],
        //     [15, 8],
        //     [15, 5],
        //     [16, 7],
        //     [16, 6],
        //     [17, 4],
        //     [17, 1],
        //     [18, 3],
        //     [18, 8],
        //     [19, 6],
        //     [19, 2],
        //     [20, 5],
        //     [20, 7],
        //     [21, 8],
        //     [21, 1],
        //     [22, 4],
        //     [22, 6],
        //     [23, 7],
        //     [23, 3],
        //     [24, 2],
        //     [24, 5],
        //     [25, 6],
        //     [25, 1],
        //     [26, 8],
        //     [26, 7],
        //     [27, 5],
        //     [27, 4],
        //     [28, 3],
        //     [28, 2],
        // ];

        foreach ($setTeams as $setTeam)
        {
            SetTeam::factory() -> create([
                "set_id" => $setTeam[0],
                "team_id" => $setTeam[1],
            ]);
        }
    }
}
