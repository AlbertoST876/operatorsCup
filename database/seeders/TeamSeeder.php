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
        // SEASON 2
        $teams = [
            ["ZeroPain",       "ZP",  "storage/images/teams/ZP.png",  null, null, null, null,                                  null, null, 1],
            ["Awaken Militia", "AM",  "storage/images/teams/AM.png",  null, null, null, "https://twitter.com/AwakenMilitia",   null, null, 1],
            ["Lynx eSports",   "LXS", "storage/images/teams/LXS.png", null, null, null, "https://twitter.com/LynxEsports22",   null, null, 1],
            ["Xperience",      "XP",  "storage/images/teams/XP.png",  null, null, null, "https://twitter.com/Xperiencexp1",    null, null, 1],
            ["BlackHole",      "BH",  "storage/images/teams/BH.png",  null, null, null, "https://twitter.com/BlackholeSports", null, null, 1],
        ];

        // SEASON 3
        // $teams = [
        //     ["Xperience",        "XP",   "storage/images/teams/XP.png",   null, null, null, "https://twitter.com/Xperiencexp1",   null, null, 1],
        //     ["Luna Esport",      "LUNA", "storage/images/teams/LUNA.png", null, null, null, "https://twitter.com/Luna__Esport",   null, null, 1],
        //     ["ZeroPain",         "ZP",   "storage/images/teams/ZP.png",   null, null, null, null,                                 null, null, 1],
        //     ["ETERNITY",         "ETY",  "storage/images/teams/ETY.png",  null, null, null, null,                                 null, null, 1],
        //     ["Benny Boys",       "BB",   "storage/images/teams/BB.png",   null, null, null, "https://twitter.com/Bennysboys_LFO", null, null, 1],
        //     ["Guardians Alpha",  "GRDX", "storage/images/teams/GRDX.png", null, null, null, "https://twitter.com/bRainbowTeam",   null, null, 1],
        //     ["Alfa Wolf eSport", "AWS",  "storage/images/teams/AWS.png",  null, null, null, null,                                 null, null, 1],
        //     ["Astony",           "ASTO", "storage/images/teams/ASTO.png", null, null, null, "https://twitter.com/TeamASTONY",     null, null, 1],
        // ];

        foreach ($teams as $team)
        {
            Team::factory() -> create([
                "name" => $team[0],
                "abbr" => $team[1],
                "logo" => $team[2],
                "email" => $team[3],
                "tel" => $team[4],
                "discord" => $team[5],
                "twitter" => $team[6],
                "twitch" => $team[7],
                "youtube" => $team[8],
                "active" => $team[9],
            ]);
        }
    }
}
