<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use App\Models\GameMember;
use App\Models\Workday;
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
     *
     * @return Response
     */
    public function index()
    {
        $workdays = Workday::select("id", "name_" . app() -> getLocale() . " AS name") -> get();

        foreach ($workdays as $workday)
        {
            foreach ($workday -> sets as $set)
            {
                $set -> teamA = Team::find($set -> teamA);
                $set -> teamB = Team::find($set -> teamB);
            }
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
        $set = Set::find($id);
        $set -> teamA = Team::find($set -> teamA);
        $set -> teamB = Team::find($set -> teamB);

        foreach ($set -> games as $game)
        {
            $game -> winner = Team::find($game -> winner);
            $game -> loser = Team::find($game -> loser);
            $game -> wMembers = GameMember::leftJoin("members", "game_members.member_id", "members.id") -> where("game_members.game_id", $game -> id) -> where("game_members.team_id", $game -> winner -> id) -> select("members.nickname", "game_members.kills", "game_members.deaths", "game_members.assists") -> selectRaw("round(game_members.kills / game_members.deaths, 2) AS kd") -> orderByDesc("kd") -> get();
            $game -> lMembers = GameMember::leftJoin("members", "game_members.member_id", "members.id") -> where("game_members.game_id", $game -> id) -> where("game_members.team_id", $game -> loser -> id) -> select("members.nickname", "game_members.kills", "game_members.deaths", "game_members.assists") -> selectRaw("round(game_members.kills / game_members.deaths, 2) AS kd") -> orderByDesc("kd") -> get();
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
