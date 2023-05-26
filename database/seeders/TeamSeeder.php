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
            [1, "ZeroPain", "ZP", "storage/images/teams/ZP.png", "managerteam101@gmail.com", "629549565", null, "https://twitter.com/Teamzeropain", null, null, 1],
            [2, "Awaken Mixers", "MXS", "storage/images/teams/MXS.png", "blookey110@gmail.com", "639010285", null, "https://twitter.com/AwakenMilitia", null, null, 1],
            [4, "Lynx eSport", "LXS", "storage/images/teams/LXS.png", "iker.arrebo.tor@gmail.com", "645388437", null, null, null, null, 1],
            [5, "XPerience", "XP", "storage/images/teams/XP.png", "rafa.gonzalez.rgm@gmail.com", "692979083", null, null, null, null, 1],
            [7, "BlackHole", "BH", "storage/images/teams/BH.png", "esport.blackhole@gmail.com", "635720303", null, "https://twitter.com/BlackholeSports", null, null, 1],
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
                "discord" => $team[6],
                "twitter" => $team[7],
                "twitch" => $team[8],
                "youtube" => $team[9],
                "active" => $team[10],
            ]);
        }
    }
}
