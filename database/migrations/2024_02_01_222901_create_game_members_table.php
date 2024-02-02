<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create("game_members", function(Blueprint $table)
        {
            $table -> id();
            $table -> foreignId("game_id") -> references("id") -> on("games");
            $table -> foreignId("member_id") -> references("id") -> on("members");
            $table -> foreignId("team_id") -> references("id") -> on("teams");
            $table -> integer("kills") -> default(0);
            $table -> integer("deaths") -> default(0);
            $table -> integer("assists") -> default(0);
            $table -> timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists("game_members");
    }
};
