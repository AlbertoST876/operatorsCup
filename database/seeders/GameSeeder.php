<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Game;

class GameSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $games = [
            [1,  1,  1, 2, 7, 1, 0],
            [3,  3,  5, 1, 7, 0, 0],
            [4,  5,  5, 7, 7, 5, 0],
            [8,  9,  2, 4, 7, 5, 0],
            [13, 14, 2, 5, 7, 1, 0],
            [14, 15, 2, 7, 7, 5, 0],
            [16, 17, 1, 4, 7, 1, 0],
            [18, 19, 7, 4, 8, 7, 1],
            [19, 20, 1, 7, 7, 3, 0],
            [20, 21, 5, 4, 7, 3, 0],
        ];

        foreach ($games as $game)
        {
            Game::factory() -> create([
                "id" => $game[0],
                "set_id" => $game[1],
                "winner" => $game[2],
                "loser" => $game[3],
                "wResult" => $game[4],
                "lResult" => $game[5],
                "overtime" => $game[6],
            ]);
        }
    }
}
