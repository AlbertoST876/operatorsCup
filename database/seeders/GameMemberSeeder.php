<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\GameMember;

class GameMemberSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $gameMembers = [
            // J1 | MX vs ZP
            [1,	8, 	/*kills*/9, /*deaths*/8, /*assists*/3],
            [1,	6, 	/*kills*/1, /*deaths*/8, /*assists*/1],
            [1,	10, /*kills*/2, /*deaths*/7, /*assists*/1],
            [1,	7, 	/*kills*/3, /*deaths*/7, /*assists*/1],
            [1,	9, 	/*kills*/5, /*deaths*/6, /*assists*/2],
            /*-------------------------------------------*/
            [1,	2, 	/*kills*/16, /*deaths*/3, /*assists*/2],
            [1,	3, 	/*kills*/3,  /*deaths*/8, /*assists*/1],
            [1,	4, 	/*kills*/0,  /*deaths*/4, /*assists*/1],
            [1,	5, 	/*kills*/5,  /*deaths*/4, /*assists*/2],
            [1,	1, 	/*kills*/13, /*deaths*/1, /*assists*/0],

            // J1 | XP vs BH
            [4,	24, /*kills*/13, /*deaths*/8, /*assists*/6],
            [4,	25, /*kills*/7,  /*deaths*/8, /*assists*/0],
            [4,	23, /*kills*/5,  /*deaths*/9, /*assists*/3],
            [4,	22, /*kills*/18, /*deaths*/6, /*assists*/1],
            [4,	21, /*kills*/5,  /*deaths*/6, /*assists*/2],
            /*-------------------------------------------*/
            [4,	26, /*kills*/8,  /*deaths*/10, /*assists*/2],
            [4,	27, /*kills*/7,  /*deaths*/8,  /*assists*/1],
            [4,	29, /*kills*/14, /*deaths*/10, /*assists*/3],
            [4,	30, /*kills*/2,  /*deaths*/10, /*assists*/4],
            [4,	28, /*kills*/7,  /*deaths*/10, /*assists*/2],

            // J2 | MX vs Lynx
            [8,	8, 	/*kills*/17, /*deaths*/9, /*assists*/8],
            [8,	6, 	/*kills*/6,  /*deaths*/5, /*assists*/0],
            [8,	10, /*kills*/13, /*deaths*/8, /*assists*/3],
            [8,	7, 	/*kills*/3,  /*deaths*/5, /*assists*/1],
            [8,	9, 	/*kills*/3,  /*deaths*/6, /*assists*/0],
            /*-------------------------------------------*/
            [8,	20, /*kills*/7, /*deaths*/8,  /*assists*/1],
            [8,	39, /*kills*/6, /*deaths*/9,  /*assists*/3],
            [8,	37, /*kills*/6, /*deaths*/9,  /*assists*/3],
            [8,	38, /*kills*/7, /*deaths*/10, /*assists*/1],
            [8,	18, /*kills*/7, /*deaths*/8,  /*assists*/4],

            // J3 | BH vs MX
            [14, 26, /*kills*/10, /*deaths*/9,  /*assists*/3],
            [14, 27, /*kills*/8,  /*deaths*/9,  /*assists*/4],
            [14, 29, /*kills*/12, /*deaths*/8,  /*assists*/1],
            [14, 30, /*kills*/5,  /*deaths*/10, /*assists*/3],
            [14, 28, /*kills*/2,  /*deaths*/9,  /*assists*/1],
            /*---------------------------------------------*/
            [14, 8,  /*kills*/12, /*deaths*/6, /*assists*/6],
            [14, 6,  /*kills*/14, /*deaths*/3, /*assists*/0],
            [14, 50, /*kills*/7,  /*deaths*/1, /*assists*/5],
            [14, 52, /*kills*/3,  /*deaths*/4, /*assists*/0],
            [14, 51, /*kills*/3,  /*deaths*/3, /*assists*/1],

            // J3 | MX vs XP
            [13, 8,  /*kills*/12, /*deaths*/2, /*assists*/3],
            [13, 6,  /*kills*/1,  /*deaths*/4, /*assists*/1],
            [13, 50, /*kills*/10, /*deaths*/2, /*assists*/2],
            [13, 52, /*kills*/2,  /*deaths*/5, /*assists*/1],
            [13, 51, /*kills*/10, /*deaths*/2, /*assists*/1],
            /*--------------------------------------------*/
            [13, 24, /*kills*/6, /*deaths*/7, /*assists*/7],
            [13, 25, /*kills*/3, /*deaths*/7, /*assists*/1],
            [13, 49, /*kills*/0, /*deaths*/7, /*assists*/0],
            [13, 22, /*kills*/6, /*deaths*/7, /*assists*/0],
            [13, 21, /*kills*/2, /*deaths*/7, /*assists*/0],

            // J4 | Lynx vs ZP
            [16, 20, /*kills*/1, /*deaths*/8, /*assists*/4],
            [16, 56, /*kills*/5, /*deaths*/7, /*assists*/1],
            [16, 57, /*kills*/0, /*deaths*/8, /*assists*/0],
            [16, 58, /*kills*/6, /*deaths*/8, /*assists*/1],
            [16, 18, /*kills*/5, /*deaths*/8, /*assists*/2],
            /*--------------------------------------------*/
            [16, 11, /*kills*/12, /*deaths*/6, /*assists*/5],
            [16, 22, /*kills*/14, /*deaths*/3, /*assists*/2],
            [16, 14, /*kills*/7,  /*deaths*/1, /*assists*/1],
            [16, 13, /*kills*/3,  /*deaths*/4, /*assists*/0],
            [16, 1,  /*kills*/3,  /*deaths*/3, /*assists*/0],

            // J4 | BH vs Lynx
            [18, 26, /*kills*/15, /*deaths*/11, /*assists*/4],
            [18, 27, /*kills*/6,  /*deaths*/11, /*assists*/2],
            [18, 29, /*kills*/11, /*deaths*/11, /*assists*/6],
            [18, 30, /*kills*/9,  /*deaths*/12, /*assists*/3],
            [18, 28, /*kills*/11, /*deaths*/11, /*assists*/0],
            /*---------------------------------------------*/
            [18, 20, /*kills*/10, /*deaths*/14, /*assists*/3],
            [18, 56, /*kills*/10, /*deaths*/10, /*assists*/3],
            [18, 57, /*kills*/10, /*deaths*/9,  /*assists*/3],
            [18, 58, /*kills*/9,  /*deaths*/10, /*assists*/3],
            [18, 18, /*kills*/16, /*deaths*/9,  /*assists*/3],

            // J5 | LYNX vs XP
            [20, 20, /*kills*/10, /*deaths*/8,  /*assists*/1],
            [20, 56, /*kills*/6,  /*deaths*/10, /*assists*/2],
            [20, 57, /*kills*/2,  /*deaths*/8,  /*assists*/3],
            [20, 58, /*kills*/5,  /*deaths*/9,  /*assists*/2],
            [20, 18, /*kills*/9,  /*deaths*/9,  /*assists*/2],
            /*---------------------------------------------*/
            [20, 24,  /*kills*/12, /*deaths*/5, /*assists*/5],
            [20, 25,  /*kills*/9,  /*deaths*/6, /*assists*/1],
            [20, 49,  /*kills*/11, /*deaths*/7, /*assists*/0],
            [20, 102, /*kills*/3,  /*deaths*/8, /*assists*/1],
            [20, 101, /*kills*/9,  /*deaths*/3, /*assists*/3],

            // J5 | ZP vs BlackHoles
            [19, 11, /*kills*/12, /*deaths*/9, /*assists*/6],
            [19, 22, /*kills*/9,  /*deaths*/8, /*assists*/2],
            [19, 59, /*kills*/9,  /*deaths*/9, /*assists*/2],
            [19, 13, /*kills*/7,  /*deaths*/3, /*assists*/0],
            [19, 1,  /*kills*/3,  /*deaths*/3, /*assists*/0],
            /*--------------------------------------------*/
            [19, 26, /*kills*/7,  /*deaths*/8, /*assists*/3],
            [19, 27, /*kills*/4,  /*deaths*/9, /*assists*/1],
            [19, 29, /*kills*/11, /*deaths*/9, /*assists*/4],
            [19, 30, /*kills*/3,  /*deaths*/8, /*assists*/0],
            [19, 28, /*kills*/7,  /*deaths*/7, /*assists*/2],
        ];

        foreach ($gameMembers as $gameMember)
        {
            GameMember::factory() -> create([
                "game" => $gameMember[0],
                "member" => $gameMember[1],
                "kills" => $gameMember[2],
                "deaths" => $gameMember[3],
                "assists" => $gameMember[4],
            ]);
        }
    }
}
