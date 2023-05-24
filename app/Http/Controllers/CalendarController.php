<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Workday;
use App\Models\Game;
use App\Models\Team;
use App\Models\Set;

class CalendarController extends Controller
{
    const DATE_FORMAT = [
        "en" => "Y-m-d H:i",
        "es" => "d/m/Y H:i",
    ];

    /**
     * Instantiate a new controller instance.
     */
    public function __construct()
    {
        $this -> middleware("auth") -> except([
            "index",
            "show",
        ]);
    }

    /**
     * Display a listing of the calendar.
     */
    public function index()
    {
        $workdaysDB = Workday::select("id", "name_" . app() -> getLocale() . " AS name") -> get();
        $workdays = [];

        foreach ($workdaysDB as $workday)
        {
            $setsDB = Set::where("workday", $workday -> id) -> get();
            $sets = [];

            foreach ($setsDB as $set)
            {
                $set -> winner = Team::find($set -> winner);
                $set -> loser = Team::find($set -> loser);

                $sets[] = [
                    "info" => $set,
                    "games" => Game::where("set", $set -> id) -> get(),
                ];
            }

            $workdays[] = [
                "info" => $workday,
                "sets" => $sets,
            ];
        }

        return view("calendar.index", [
            "dateFormat" => self::DATE_FORMAT[app() -> getLocale()],
            "workdays" => $workdays,
            "sets" => $sets,
        ]);
    }

    /**
     * Show the form for creating a new calendar.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created calendar in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified calendar.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified calendar.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified calendar in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified calendar from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
