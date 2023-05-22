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
        $teams = [
            [1, "ZeroPain", "ZP", "storage/images/teams/ZP.png", "managerteam101@gmail.com", "629549565", "Teamzeropain", 1],
            [2, "Awaken Mixers", "MXS", "storage/images/teams/MXS.png", "blookey110@gmail.com", "639010285", "AwakenMilitia", 1],
            [4, "Lynx eSport", "LXS", "storage/images/teams/LXS.png", "iker.arrebo.tor@gmail.com", "645388437", null, 1],
            [5, "Xperience", "XP", "storage/images/teams/XP.png", "rafa.gonzalez.rgm@gmail.com", "692979083", null, 1],
            [7, "BlackHole ", "BH", "storage/images/teams/BH.png", "esport.blackhole@gmail.com", "635720303", "BlackholeSports", 1],
        ];

        foreach ($teams as $team)
        {
            Team::factory() -> create([
                "id" => $team[0],
                "name" => $team[1],
                "abbr" => $team[2],
                "logo" => $team[3],
                "email" => $team[4],
                "tel" => $team[5],
                "twitter" => $team[6],
                "active" => $team[7],
            ]);
        }
    }
}
