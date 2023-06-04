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
        $points = 0;

        foreach ($team -> sets as $set)
        {
            if ($set -> workday -> phase -> id == 1)
            {
                if ($set -> games[0] -> overtime)
                {
                    if ($set -> games[0] -> teams[0] -> pivot -> team_id == $id)
                    {
                        $points += $set -> games[0] -> teams[0] -> pivot -> winner ? 2 : 1;
                    }
                    else
                    {
                        $points += $set -> games[0] -> teams[1] -> pivot -> winner ? 2 : 1;
                    }
                }
                else
                {
                    if ($set -> games[0] -> teams[0] -> pivot -> team_id == $id)
                    {
                        $points += $set -> games[0] -> teams[0] -> pivot -> winner ? 3 : 0;
                    }
                    else
                    {
                        $points += $set -> games[0] -> teams[1] -> pivot -> winner ? 3 : 0;
                    }
                }
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
