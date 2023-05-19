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
        $workdays = [];

        foreach ($workdays as $workday)
        {
            Workday::factory() -> create([
                "name" => $workday[0],
                "date" => $workday[1],
            ]);
        }
    }
}
