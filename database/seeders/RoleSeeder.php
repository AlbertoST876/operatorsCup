<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Role;

class RoleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $roles = [
            ["Coach", "Entrenador"],
            ["Captain", "Capitán"],
            ["Player", "Jugador"],
            ["Alternate", "Suplente"],
        ];

        foreach ($roles as $role)
        {
            Role::factory() -> create([
                "name_en" => $role[0],
                "name_es" => $role[1],
            ]);
        }
    }
}
