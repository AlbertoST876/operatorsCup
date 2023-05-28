<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\State;

class StateSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $status = [
            ["Canceled", "Cancelado", "#ff3311"],
            ["Waiting",  "Esperando", "#eeee00"],
            ["Played",   "Jugado",    "#55ff33"],
        ];

        foreach ($status as $state)
        {
            State::factory() -> create([
                "name_en" => $state[0],
                "name_es" => $state[1],
                "color" => $state[2],
            ]);
        }
    }
}
