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
            [null, 1, 2, null, "2023-07-01 17:00:00", 1],
            [null, 1, 2, null, "2023-07-01 18:30:00", 1],
            [null, 1, 2, null, "2023-07-02 17:00:00", 1],
            [null, 1, 2, null, "2023-07-02 18:30:00", 1],
            [null, 2, 2, null, "2023-07-08 17:00:00", 1],
            [null, 2, 2, null, "2023-07-08 18:30:00", 1],
            [null, 2, 2, null, "2023-07-09 17:00:00", 1],
            [null, 2, 2, null, "2023-07-09 18:30:00", 1],
            [null, 3, 2, null, "2023-07-15 17:00:00", 1],
            [null, 3, 2, null, "2023-07-15 18:30:00", 1],
            [null, 3, 2, null, "2023-07-16 17:00:00", 1],
            [null, 3, 2, null, "2023-07-16 18:30:00", 1],
            [null, 4, 2, null, "2023-07-22 17:00:00", 1],
            [null, 4, 2, null, "2023-07-22 18:30:00", 1],
            [null, 4, 2, null, "2023-07-23 17:00:00", 1],
            [null, 4, 2, null, "2023-07-23 18:30:00", 1],
            [null, 5, 2, null, "2023-08-05 17:00:00", 1],
            [null, 5, 2, null, "2023-08-05 18:30:00", 1],
            [null, 5, 2, null, "2023-08-06 17:00:00", 1],
            [null, 5, 2, null, "2023-08-06 18:30:00", 1],
            [null, 6, 2, null, "2023-08-12 17:00:00", 1],
            [null, 6, 2, null, "2023-08-12 18:30:00", 1],
            [null, 6, 2, null, "2023-08-13 17:00:00", 1],
            [null, 6, 2, null, "2023-08-13 18:30:00", 1],
            [null, 7, 2, null, "2023-08-19 17:00:00", 1],
            [null, 7, 2, null, "2023-08-19 18:30:00", 1],
            [null, 7, 2, null, "2023-08-20 17:00:00", 1],
            [null, 7, 2, null, "2023-08-20 18:30:00", 1],
        ];

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
