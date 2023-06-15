<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\GameMember;

class GameMemberSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $gameMembers = [];

        foreach ($gameMembers as $gameMember)
        {
            GameMember::factory() -> create([
                "game_id" => $gameMember[0],
                "member_id" => $gameMember[1],
                "team_id" => $gameMember[2],
                "kills" => $gameMember[3],
                "deaths" => $gameMember[4],
                "assists" => $gameMember[5],
            ]);
        }
    }
}
