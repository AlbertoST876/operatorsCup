<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\TeamsController;
use App\Http\Controllers\RankingController;
use App\Http\Controllers\CalendarController;
use App\Http\Controllers\LanguageController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get("lang/{locale}", [LanguageController::class, "index"]);

Route::controller(HomeController::class) -> group(function()
{
    Route::get("/", "index") -> name("index");
    Route::get("/rules", "rules") -> name("rules");
    Route::get("/stats", "stats") -> name("stats");
});

Route::resource("teams", TeamsController::class);
Route::resource("calendar", CalendarController::class);
Route::get("ranking", [RankingController::class, "index"]) -> name("ranking.index");
