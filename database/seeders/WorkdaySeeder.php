<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Workday;

class WorkdaySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $workdays = [
            [1, "Workday #1",   "Jornada #1",  "2023-07-01"],
            [1, "Workday #2",   "Jornada #2",  "2023-07-08"],
            [1, "Workday #3",   "Jornada #3",  "2023-07-15"],
            [1, "Workday #4",   "Jornada #4",  "2023-07-22"],
            [1, "Workday #5",   "Jornada #5",  "2023-08-05"],
            [1, "Workday #6",   "Jornada #6",  "2023-08-12"],
            [1, "Workday #7",   "Jornada #7",  "2023-08-19"],
            [2, "Semifinals",   "Semifinales", "2023-09-02"],
            [2, "Final",        "Final",       "2023-09-09"],
            [2, "Grand Finale", "Gran Final",  "2023-09-16"],
        ];

        foreach ($workdays as $workday)
        {
            Workday::factory() -> create([
                "phase_id" => $workday[0],
                "name_en" => $workday[1],
                "name_es" => $workday[2],
                "date" => $workday[3],
            ]);
        }
    }
}
