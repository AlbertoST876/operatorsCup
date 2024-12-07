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
        // SEASON 2
        $sets = [
            ["storage/images/mapbans/1.png",  1, 3, null, "2022-01-01 16:00:00", 1],
            [null,                            2, 1, null, "2022-01-02 17:30:00", 1],
            ["storage/images/mapbans/3.png",  1, 3, null, "2022-01-03 16:00:00", 1],
            ["storage/images/mapbans/4.png",  3, 3, null, "2022-01-04 17:30:00", 1],
            ["storage/images/mapbans/5.png",  5, 3, null, "2022-01-05 16:00:00", 1],
            ["storage/images/mapbans/6.png",  4, 3, null, "2022-01-06 17:30:00", 1],
            ["storage/images/mapbans/7.png",  5, 3, null, "2022-01-07 16:00:00", 1],
            ["storage/images/mapbans/8.png",  6, 3, null, "2022-01-08 17:30:00", 1],
            ["storage/images/mapbans/9.png",  7, 3, null, "2022-01-09 16:00:00", 1],
            ["storage/images/mapbans/10.png", 7, 3, null, "2022-01-10 17:30:00", 1],
        ];

        // SEASON 3
        // $sets = [
        //     [null, 1, 2, null, "2023-07-01 17:00:00", 1],
        //     [null, 1, 2, null, "2023-07-01 18:30:00", 1],
        //     [null, 1, 2, null, "2023-07-02 17:00:00", 1],
        //     [null, 1, 2, null, "2023-07-02 18:30:00", 1],
        //     [null, 2, 2, null, "2023-07-08 17:00:00", 1],
        //     [null, 2, 2, null, "2023-07-08 18:30:00", 1],
        //     [null, 2, 2, null, "2023-07-09 17:00:00", 1],
        //     [null, 2, 2, null, "2023-07-09 18:30:00", 1],
        //     [null, 3, 2, null, "2023-07-15 17:00:00", 1],
        //     [null, 3, 2, null, "2023-07-15 18:30:00", 1],
        //     [null, 3, 2, null, "2023-07-16 17:00:00", 1],
        //     [null, 3, 2, null, "2023-07-16 18:30:00", 1],
        //     [null, 4, 2, null, "2023-07-22 17:00:00", 1],
        //     [null, 4, 2, null, "2023-07-22 18:30:00", 1],
        //     [null, 4, 2, null, "2023-07-23 17:00:00", 1],
        //     [null, 4, 2, null, "2023-07-23 18:30:00", 1],
        //     [null, 5, 2, null, "2023-08-05 17:00:00", 1],
        //     [null, 5, 2, null, "2023-08-05 18:30:00", 1],
        //     [null, 5, 2, null, "2023-08-06 17:00:00", 1],
        //     [null, 5, 2, null, "2023-08-06 18:30:00", 1],
        //     [null, 6, 2, null, "2023-08-12 17:00:00", 1],
        //     [null, 6, 2, null, "2023-08-12 18:30:00", 1],
        //     [null, 6, 2, null, "2023-08-13 17:00:00", 1],
        //     [null, 6, 2, null, "2023-08-13 18:30:00", 1],
        //     [null, 7, 2, null, "2023-08-19 17:00:00", 1],
        //     [null, 7, 2, null, "2023-08-19 18:30:00", 1],
        //     [null, 7, 2, null, "2023-08-20 17:00:00", 1],
        //     [null, 7, 2, null, "2023-08-20 18:30:00", 1],
        // ];

        foreach ($sets as $set)
        {
            Set::factory() -> create([
                "mapban" => $set[0],
                "workday_id" => $set[1],
                "state_id" => $set[2],
                "youtube" => $set[3],
                "datetime" => $set[4],
                "active" => $set[5],
            ]);
        }
    }
}
