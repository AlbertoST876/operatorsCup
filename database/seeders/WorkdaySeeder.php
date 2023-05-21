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
            ["Jornada 1", "2023-08-05"],
            ["Jornada 2", "2023-08-12"],
            ["Jornada 3", "2023-08-19"],
            ["Jornada 4", "2023-08-26"],
            ["Jornada 5", "2023-09-02"],
            ["Jornada 6", "2023-09-16"],
            ["Jornada 7", "2023-09-23"],
            ["Jornada 8", "2023-09-30"],
            ["Jornada 9", "2023-10-07"],
            ["Semifinales", "2023-10-21"],
            ["Final", "2023-10-22"],
            ["Gran Final", "2023-10-29"],
        ];

        foreach ($workdays as $workday)
        {
            Workday::factory() -> create([
                "name" => $workday[0],
                "date" => $workday[1],
            ]);
        }
    }
}
