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
        // SEASON 2
        $games = [
            [1,  0],
            [2,  0],
            [3,  0],
            [4,  0],
            [5,  0],
            [6,  0],
            [7,  0],
            [8,  1],
            [9,  0],
            [10, 0],
        ];

        // SEASON 3
        // $games = [];

        foreach ($games as $game)
        {
            Game::factory() -> create([
                "set_id" => $game[0],
                "overtime" => $game[1],
            ]);
        }
    }
}
