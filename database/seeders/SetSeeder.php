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
            [1, "storage/images/mapbans/1.png", 1, 3, 1, 2, "2022-01-01 16:00:00", 1],
            [3, null, 2, 1, 5, 1, "2022-01-02 17:00:00", 1],
            [5, "storage/images/mapbans/5.png", 1, 3, 5, 7, "2022-01-03 16:00:00", 1],
            [9, "storage/images/mapbans/9.png", 3, 3, 2, 4, "2022-01-04 17:00:00", 1],
            [14, "storage/images/mapbans/14.png", 5, 3, 2, 5, "2022-01-05 16:00:00", 1],
            [15, "storage/images/mapbans/15.png", 4, 3, 2, 7, "2022-01-06 17:00:00", 1],
            [17, "storage/images/mapbans/17.png", 5, 3, 1, 4, "2022-01-07 16:00:00", 1],
            [19, "storage/images/mapbans/19.png", 6, 3, 7, 4, "2022-01-08 17:00:00", 1],
            [20, "storage/images/mapbans/20.png", 7, 3, 1, 7, "2022-01-09 16:00:00", 1],
            [21, "storage/images/mapbans/21.png", 7, 3, 5, 4, "2022-01-10 17:00:00", 1],
        ];

        foreach ($sets as $set)
        {
            Set::factory() -> create([
                "id" => $set[0],
                "mapban" => $set[1],
                "workday" => $set[2],
                "state" => $set[3],
                "winner" => $set[4],
                "loser" => $set[5],
                "datetime" => $set[6],
                "active" => $set[7],
            ]);
        }
    }
}
