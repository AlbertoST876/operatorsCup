<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\TeamsController;
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
    Route::get("/calendar", "calendar") -> name("calendar");
    Route::get("/ranking", "ranking") -> name("ranking");
    Route::get("/stats", "stats") -> name("stats");
});

Route::controller(TeamsController::class) -> group(function()
{
    Route::prefix('/teams')->group(function()
    {
        Route::name('teams.') -> group(function()
        {
            Route::get("/", "index") -> name("index");
            Route::get("/create", "create") -> name("create");
            Route::post("/store", "store") -> name("store");
            Route::get("/show/{id}", "show") -> name("show");
            Route::get("/edit", "edit") -> name("edit");
            Route::patch("/update", "update") -> name("update");
            Route::delete("/destroy", "destroy") -> name("destroy");
        });
    });
});
