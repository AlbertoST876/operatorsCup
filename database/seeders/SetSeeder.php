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
            [1,  "storage/images/mapbans/1.png",  1, 3, 2, 1, "https://www.youtube.com/", "2022-01-01 16:00:00", 1],
            [3,  null,                            2, 1, 1, 5, null,                       "2022-01-02 17:00:00", 1],
            [5,  "storage/images/mapbans/5.png",  1, 3, 5, 7, "https://www.youtube.com/", "2022-01-03 16:00:00", 1],
            [9,  "storage/images/mapbans/9.png",  3, 3, 2, 4, "https://www.youtube.com/", "2022-01-04 17:00:00", 1],
            [14, "storage/images/mapbans/14.png", 5, 3, 2, 5, "https://www.youtube.com/", "2022-01-05 16:00:00", 1],
            [15, "storage/images/mapbans/15.png", 4, 3, 7, 2, "https://www.youtube.com/", "2022-01-06 17:00:00", 1],
            [17, "storage/images/mapbans/17.png", 5, 3, 4, 1, "https://www.youtube.com/", "2022-01-07 16:00:00", 1],
            [19, "storage/images/mapbans/19.png", 6, 3, 7, 4, "https://www.youtube.com/", "2022-01-08 17:00:00", 1],
            [20, "storage/images/mapbans/20.png", 7, 3, 1, 7, "https://www.youtube.com/", "2022-01-09 16:00:00", 1],
            [21, "storage/images/mapbans/21.png", 7, 3, 4, 5, "https://www.youtube.com/", "2022-01-10 17:00:00", 1],
        ];

        foreach ($sets as $set)
        {
            Set::factory() -> create([
                "id" => $set[0],
                "mapban" => $set[1],
                "workday_id" => $set[2],
                "state_id" => $set[3],
                "teamA" => $set[4],
                "teamB" => $set[5],
                "youtube" => $set[6],
                "datetime" => $set[7],
                "active" => $set[8],
            ]);
        }
    }
}
