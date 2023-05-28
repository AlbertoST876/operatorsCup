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
            ["Workday #1",   "Jornada #1",  "2023-08-05"],
            ["Workday #2",   "Jornada #2",  "2023-08-12"],
            ["Workday #3",   "Jornada #3",  "2023-08-19"],
            ["Workday #4",   "Jornada #4",  "2023-08-26"],
            ["Workday #5",   "Jornada #5",  "2023-09-02"],
            ["Workday #6",   "Jornada #6",  "2023-09-16"],
            ["Workday #7",   "Jornada #7",  "2023-09-23"],
            ["Workday #8",   "Jornada #8",  "2023-09-30"],
            ["Workday #9",   "Jornada #9",  "2023-10-07"],
            ["Semifinals",   "Semifinales", "2023-10-21"],
            ["Final",        "Final",       "2023-10-22"],
            ["Grand Finale", "Gran Final",  "2023-10-29"],
        ];

        foreach ($workdays as $workday)
        {
            Workday::factory() -> create([
                "name_en" => $workday[0],
                "name_es" => $workday[1],
                "date" => $workday[2],
            ]);
        }
    }
}
