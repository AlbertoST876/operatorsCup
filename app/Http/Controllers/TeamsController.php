<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Member;
use App\Models\Team;
use App\Models\Game;
use App\Models\Set;

use function PHPUnit\Framework\matches;

class TeamsController extends Controller
{
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
            "teams" => Team::get(),
        ]);
    }

    /**
     * Show the form for creating a new team.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created team in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified team.
     */
    public function show(string $id)
    {
        $games = Set::leftJoin("games", "sets.id", "games.set") -> where("sets.winner", $id) -> orWhere("sets.loser", $id) -> where("sets.workday", "<", 10) -> select("games.winner", "games.overtime") -> get();
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

        $setsDB = Set::where("winner", $id) -> orWhere("loser", $id) -> select("id", "winner", "loser", "datetime") -> get();
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

        return view("teams.show", [
            "members" => Member::leftJoin("roles", "members.role", "roles.id") -> where("members.team", $id) -> select("roles.name AS role", "members.nickname", "members.twitter", "members.twitch", "members.youtube", "members.active") -> orderBy("roles.id") -> get(),
            "team" => Team::find($id),
            "points" => $points,
            "sets" => $sets,
        ]);
    }

    /**
     * Show the form for editing the specified team.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified team in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the team resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
