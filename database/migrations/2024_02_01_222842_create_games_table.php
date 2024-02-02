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
        Schema::create("games", function(Blueprint $table)
        {
            $table -> id();
            $table -> foreignId("set_id") -> references("id") -> on("sets");
            $table -> boolean("overtime") -> default(0);
            $table -> timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists("games");
    }
};
