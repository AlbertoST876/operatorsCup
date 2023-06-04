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
            [1,  1,  0],
            [3,  3,  0],
            [4,  5,  0],
            [8,  9,  0],
            [13, 14, 0],
            [14, 15, 0],
            [16, 17, 0],
            [18, 19, 1],
            [19, 20, 0],
            [20, 21, 0],
        ];

        foreach ($games as $game)
        {
            Game::factory() -> create([
                "id" => $game[0],
                "set_id" => $game[1],
                "overtime" => $game[2],
            ]);
        }
    }
}
