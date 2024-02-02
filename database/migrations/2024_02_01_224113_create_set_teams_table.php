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
        Schema::create("set_teams", function(Blueprint $table)
        {
            $table -> id();
            $table -> foreignId("set_id") -> references("id") -> on("sets");
            $table -> foreignId("team_id") -> references("id") -> on("teams");
            $table -> timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists("set_teams");
    }
};
