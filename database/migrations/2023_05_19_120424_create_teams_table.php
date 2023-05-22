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
        Schema::create("teams", function(Blueprint $table)
        {
            $table -> id();
            $table -> string("name", 50);
            $table -> string("abbr", 10);
            $table -> string("image", 50) -> nullable() -> default(null);
            $table -> string("email", 50) -> nullable() -> default(null);
            $table -> string("tel", 20) -> nullable() -> default(null);
            $table -> string("twitter", 30) -> nullable() -> default(null);
            $table -> timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists("teams");
    }
};
