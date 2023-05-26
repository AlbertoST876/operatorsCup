<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Support\Facades\DB;
use App\Models\GameMember;
use App\Models\Workday;
use App\Models\State;
use App\Models\Team;
use App\Models\Game;
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
     *
     * @return Response
     */
    public function index()
    {
        $workdaysDB = Workday::select("id", "name_" . app() -> getLocale() . " AS name") -> get();
        $workdays = [];

        foreach ($workdaysDB as $workday)
        {
            $setsDB = Set::where("workday", $workday -> id) -> where("active", true) -> get();
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
        ]);
    }

    /**
     * Show the form for creating a new calendar.
     *
     * @return Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created calendar in storage.
     *
     * @param Request $request
     * @return Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified calendar.
     *
     * @param string $id
     * @return Response
     */
    public function show(string $id)
    {
        $set = [];

        $set["info"] = Set::find($id);
        $set["info"] -> state = State::where("id", $set["info"] -> state) -> select("name_" . app() -> getLocale() . " AS name", "color") -> first();
        $set["info"] -> winner = Team::find($set["info"] -> winner);
        $set["info"] -> loser = Team::find($set["info"] -> loser);
        $set["games"] = Game::where("set", $id) -> get();

        for ($game = 0; $game < count($set["games"]); $game++)
        {
            $set["games"][$game] -> wStats = GameMember::leftJoin("members", "game_members.member", "members.id") -> leftJoin("teams", "members.team", "teams.id") -> where("game_members.game", $set["games"][$game] -> id) -> where("teams.id", $set["info"] -> winner -> id) -> select("members.nickname", "game_members.kills", "game_members.deaths", "game_members.assists", DB::raw("game_members.kills / game_members.deaths AS kd")) -> orderBy("kd", "DESC") -> get();
            $set["games"][$game] -> lStats = GameMember::leftJoin("members", "game_members.member", "members.id") -> leftJoin("teams", "members.team", "teams.id") -> where("game_members.game", $set["games"][$game] -> id) -> where("teams.id", $set["info"] -> loser -> id) -> select("members.nickname", "game_members.kills", "game_members.deaths", "game_members.assists", DB::raw("game_members.kills / game_members.deaths AS kd")) -> orderBy("kd", "DESC") -> get();
        }

        return view("calendar.show", [
            "dateFormat" => self::DATE_FORMAT[app() -> getLocale()],
            "set" => $set,
        ]);
    }

    /**
     * Show the form for editing the specified calendar.
     *
     * @param string $id
     * @return Response
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified calendar in storage.
     *
     * @param Request $request
     * @param string $id
     * @return Response
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified calendar from storage.
     *
     * @param string $id
     * @return Response
     */
    public function destroy(string $id)
    {
        //
    }
}
