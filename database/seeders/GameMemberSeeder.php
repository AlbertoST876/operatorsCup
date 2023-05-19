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
                "game" => $gameMember[0],
                "member" => $gameMember[1],
                "kills" => $gameMember[2],
                "deaths" => $gameMember[3],
                "assists" => $gameMember[4],
            ]);
        }
    }
}
