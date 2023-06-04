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
        Schema::create("game_teams", function (Blueprint $table) {
            $table -> id();
            $table -> foreignId("game_id") -> references("id") -> on("games");
            $table -> foreignId("team_id") -> references("id") -> on("teams");
            $table -> boolean("winner");
            $table -> integer("result");
            $table -> timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists("game_teams");
    }
};
