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
        Schema::create("sets", function(Blueprint $table)
        {
            $table -> id();
            $table -> string("mapban", 50) -> nullable() -> default(null);
            $table -> integer("workday") -> references("id") -> on("workdays");
            $table -> integer("winner") -> references("id") -> on("teams");
            $table -> integer("loser") -> references("id") -> on("teams");
            $table -> dateTime("datetime");
            $table -> timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists("sets");
    }
};
