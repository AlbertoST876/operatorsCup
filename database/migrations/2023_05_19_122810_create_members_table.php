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
        Schema::create("members", function(Blueprint $table)
        {
            $table -> id();
            $table -> integer("role") -> references("id") -> on("roles");
            $table -> integer("team") -> references("id") -> on("teams");
            $table -> string("nickname", 50);
            $table -> string("discord", 50) -> nullable() -> default(null);
            $table -> string("twitter", 50) -> nullable() -> default(null);
            $table -> string("twitch", 50) -> nullable() -> default(null);
            $table -> date("birthday") -> nullable() -> default(null);
            $table -> boolean("active") -> default(1);
            $table -> timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists("members");
    }
};
