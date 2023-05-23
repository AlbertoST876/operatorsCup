<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Round;

class RoundSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $rounds = [];

        foreach ($rounds as $round)
        {
            Round::factory() -> create([
                "game" => $round[0],
                "winner" => $round[1],
                "loser" => $round[2],
            ]);
        }
    }
}
