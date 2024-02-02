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
        Schema::create("workdays", function(Blueprint $table)
        {
            $table -> id();
            $table -> foreignId("phase_id") -> references("id") -> on("phases");
            $table -> string("name_en", 50);
            $table -> string("name_es", 50);
            $table -> string("abbr", 10);
            $table -> date("date");
            $table -> timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists("workdays");
    }
};
