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
        $sets = [
            [1, "storage/images/mapbans/1.png", 1, 1, 2],
            [3, "storage/images/mapbans/3.png", 2, 5, 1],
            [5, "storage/images/mapbans/5.png", 1, 5, 7],
            [9, "storage/images/mapbans/9.png", 3, 2, 4],
            [14, "storage/images/mapbans/14.png", 5, 2, 5],
            [15, "storage/images/mapbans/15.png", 4, 2, 7],
            [17, "storage/images/mapbans/17.png", 5, 1, 4],
            [19, "storage/images/mapbans/19.png", 6, 7, 4],
            [20, "storage/images/mapbans/20.png", 7, 1, 7],
            [21, "storage/images/mapbans/21.png", 7, 5, 4],
        ];

        foreach ($sets as $set)
        {
            Set::factory() -> create([
                "id" => $set[0],
                "mapban" => $set[1],
                "workday" => $set[2],
                "winner" => $set[3],
                "loser" => $set[4],
            ]);
        }
    }
}
