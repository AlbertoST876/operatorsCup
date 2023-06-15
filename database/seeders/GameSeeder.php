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
                "id" => $game[0],
                "set_id" => $game[1],
                "overtime" => $game[2],
            ]);
        }
    }
}
