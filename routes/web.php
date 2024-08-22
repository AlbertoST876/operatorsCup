<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\StatsController;
use App\Http\Controllers\TeamsController;
use App\Http\Controllers\RankingController;
use App\Http\Controllers\CalendarController;
use App\Http\Controllers\LanguageController;

Route::get("lang/{locale}", [LanguageController::class, "index"]);

Route::controller(HomeController::class) -> group(function() {
    Route::get("", "index") -> name("index");
    Route::get("rules", "rules") -> name("rules");
    Route::get("about", "about") -> name("about");
    Route::get("license", "license") -> name("license");
    Route::get("privacyPolicy", "privacyPolicy") -> name("privacyPolicy");
});

Route::controller(TeamsController::class) -> group(function() {
    Route::prefix("teams") -> group(function() {
        Route::name("teams.") -> group(function() {
            Route::get("", "index") -> name("index");
            Route::get("{team}", "show") -> name("show");
        });
    });
});

Route::controller(CalendarController::class) -> group(function() {
    Route::prefix("calendar") -> group(function() {
        Route::name("calendar.") -> group(function() {
            Route::get("", "index") -> name("index");
            Route::get("{calendar}", "show") -> name("show");
        });
    });
});

Route::get("ranking", [RankingController::class, "index"]) -> name("ranking.index");
Route::get("stats", [StatsController::class, "index"]) -> name("stats.index");
