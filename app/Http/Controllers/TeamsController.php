<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use App\Models\Member;
use App\Models\Team;
use App\Models\Game;
use App\Models\Set;

class TeamsController extends Controller
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
     * Return view teams
     *
     * @return Response
     */
    public function index()
    {
        return view("teams.index", [
            "teams" => Team::where("active", true) -> orderBy("name") -> get(),
        ]);
    }

    /**
     * Show the form for creating a new team.
     *
     * @return Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created team in storage.
     *
     * @param Request $request
     * @return Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified team.
     *
     * @param string $id
     * @return Response
     */
    public function show(string $id)
    {
        $team = Team::find($id);
        $team -> members = Member::leftJoin("roles", "members.role_id", "roles.id") -> where("members.team_id", $id) -> where("members.active", true) -> select("roles.name_" . app() -> getLocale() . " AS role", "members.nickname", "members.twitter", "members.twitch", "members.youtube") -> orderBy("roles.id") -> get();
        $team -> sets = Set::where("teamA", $id) -> orWhere("teamB", $id) -> where("active", true) -> select("id", "teamA", "teamB", "datetime") -> get();

        foreach ($team -> sets as $set)
        {
            $set -> teamA = Team::find($set -> teamA);
            $set -> teamB = Team::find($set -> teamB);
            $set -> games = Game::where("set_id", $set -> id) -> get();
        }

        $games = Set::leftJoin("games", "sets.id", "games.set_id") -> where("sets.teamA", $id) -> orWhere("sets.teamB", $id) -> where("sets.workday_id", "<", 10) -> where("sets.active", true) -> select("games.winner", "games.overtime") -> get();
        $points = 0;

        foreach ($games as $game)
        {
            if ($game -> overtime)
            {
                $points += $game -> winner == $id ? 2 : 1;
            }
            else
            {
                $points += $game -> winner == $id ? 3 : 0;
            }
        }

        $team -> points = $points;

        return view("teams.show", [
            "dateFormat" => self::DATE_FORMAT[app() -> getLocale()],
            "team" => $team,
        ]);
    }

    /**
     * Show the form for editing the specified team.
     *
     * @param string $id
     * @return Response
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified team in storage.
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
     * Remove the team resource from storage.
     *
     * @param string $id
     * @return Response
     */
    public function destroy(string $id)
    {
        //
    }
}
