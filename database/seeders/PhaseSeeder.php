<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Phase;

class PhaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $phases = [
            ["League",   "Liga"],
            ["Playoffs", "Playoffs"],
        ];

        foreach ($phases as $phase)
        {
            Phase::factory() -> create([
                "name_en" => $phase[0],
                "name_es" => $phase[1],
            ]);
        }
    }
}
