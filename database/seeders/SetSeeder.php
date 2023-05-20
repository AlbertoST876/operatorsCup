<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Set;

class SetSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $sets = [];

        foreach ($sets as $set)
        {
            Set::factory() -> create([
                "workday" => $set[0],
                "winner" => $set[1],
                "loser" => $set[2],
            ]);
        }
    }
}
