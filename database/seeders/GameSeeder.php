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
        $games = [];

        foreach ($games as $game)
        {
            Game::factory() -> create([
                "match" => $game[0],
                "winner" => $game[1],
                "loser" => $game[2],
                "overtime" => $game[3],
            ]);
        }
    }
}
