<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Encounter;

class EncounterSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $encounters = [];

        foreach ($encounters as $encounter)
        {
            Encounter::factory() -> create([
                "workday" => $encounter[0],
                "winner" => $encounter[1],
                "loser" => $encounter[2],
            ]);
        }
    }
}
