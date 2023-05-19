<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Team;

class TeamSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $teams = [];

        foreach ($teams as $team)
        {
            Team::factory() -> create([
                "name" => $team[0],
                "abbr" => $team[1],
                "email" => $team[2],
                "tel" => $team[3],
                "twitter" => $team[4],
            ]);
        }
    }
}
