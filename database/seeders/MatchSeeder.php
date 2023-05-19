<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Match;

class MatchSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $matches = [];

        foreach ($matches as $match)
        {
            Match::factory() -> create([
                "workday" => $match[0],
                "winner" => $match[1],
                "loser" => $match[2],
            ]);
        }
    }
}
