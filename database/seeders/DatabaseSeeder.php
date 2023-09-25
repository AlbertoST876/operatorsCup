<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        $this -> call([
            TeamSeeder::class,
            PhaseSeeder::class,
            WorkdaySeeder::class,
            StateSeeder::class,
            SetSeeder::class,
            GameSeeder::class,
            RoleSeeder::class,
            MemberSeeder::class,
            GameMemberSeeder::class,
            GameTeamSeeder::class,
            SetTeamSeeder::class,
        ]);
    }
}
