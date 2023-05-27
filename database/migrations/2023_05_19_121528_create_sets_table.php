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
            $table -> integer("state") -> references("id") -> on("status");
            $table -> integer("teamA") -> references("id") -> on("teams");
            $table -> integer("teamB") -> references("id") -> on("teams");
            $table -> string("youtube", 50) -> nullable();
            $table -> dateTime("datetime");
            $table -> boolean("active") -> default(1);
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
