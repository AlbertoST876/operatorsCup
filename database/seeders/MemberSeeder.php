<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Member;

class MemberSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $members = [];

        foreach ($members as $member)
        {
            Member::factory() -> create([
                "role" => $member[0],
                "team" => $member[1],
                "nickname" => $member[2],
                "discord" => $member[3],
                "twitter" => $member[4],
                "twitch" => $member[5],
                "birthday" => $member[6],
                "active" => $member[7],
            ]);
        }
    }
}
