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
            ["ZeroPain",       "ZP",  "storage/images/teams/ZP.png",  "managerteam101@gmail.com",    "629549565", null, null,                                  null, null, 1],
            ["Awaken Militia", "AM",  "storage/images/teams/AM.png",  "blookey110@gmail.com",        "639010285", null, "https://twitter.com/AwakenMilitia",   null, null, 1],
            ["Lynx eSports",   "LXS", "storage/images/teams/LXS.png", "iker.arrebo.tor@gmail.com",   "645388437", null, "https://twitter.com/LynxEsports22",   null, null, 1],
            ["Xperience",      "XP",  "storage/images/teams/XP.png",  "rafa.gonzalez.rgm@gmail.com", "692979083", null, "https://twitter.com/Xperiencexp1",    null, null, 1],
            ["BlackHole",      "BH",  "storage/images/teams/BH.png",  "esport.blackhole@gmail.com",  "635720303", null, "https://twitter.com/BlackholeSports", null, null, 1],
        ];

        // SEASON 3
        // $teams = [
        //     ["Xperience",        "XP",   "storage/images/teams/XP.png",   "Plainairplane48@gmail.com",  "692979083",   null, "https://twitter.com/Xperiencexp1",   null, null, 1],
        //     ["Luna Esport",      "LUNA", "storage/images/teams/LUNA.png", "forniermathis1@gmail.com",   "0673855127",  null, "https://twitter.com/Luna__Esport",   null, null, 1],
        //     ["ZeroPain",         "ZP",   "storage/images/teams/ZP.png",   "fvaldiviaa08@gmail.com",     "639934132",   null, null,                                 null, null, 1],
        //     ["ETERNITY",         "ETY",  "storage/images/teams/ETY.png",  "mariomannina1@gmail.com",    "3279807061",  null, null,                                 null, null, 1],
        //     ["Benny Boys",       "BB",   "storage/images/teams/BB.png",   "raw12341@outlook.com",       "07456893602", null, "https://twitter.com/Bennysboys_LFO", null, null, 1],
        //     ["Guardians Alpha",  "GRDX", "storage/images/teams/GRDX.png", "edgarsjemeljanovs@inbox.lv", "123456789",   null, "https://twitter.com/bRainbowTeam",   null, null, 1],
        //     ["Alfa Wolf eSport", "AWS",  "storage/images/teams/AWS.png",  "jfvfernandez@icloud.com",    "657405121",   null, null,                                 null, null, 1],
        //     ["Astony",           "ASTO", "storage/images/teams/ASTO.png", "jens.aerts.1998@gmail.com",  "0493615483",  null, "https://twitter.com/TeamASTONY",     null, null, 1],
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
