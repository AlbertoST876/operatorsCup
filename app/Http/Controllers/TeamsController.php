<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Routing\Controllers\Middleware;
use Illuminate\Routing\Controllers\HasMiddleware;
use Illuminate\Support\Facades\Crypt;
use App\Models\Member;
use App\Models\Team;
use App\Models\Game;
use App\Models\Set;

class TeamsController extends Controller implements HasMiddleware
{
    /**
     * Get the middleware that should be assigned to the controller.
     */
    public static function middleware(): array
    {
        return [
            new Middleware("auth", except: [
                "index",
                "show",
            ]),
        ];
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
     * Display the specified team.
     *
     * @param string $id
     * @return Response
     */
    public function show(string $id)
    {
        $team = Team::where("abbr", $id) -> firstOrFail();
        $points = 0;

        if (count($team -> sets) > 0)
        {
            foreach ($team -> sets as $set)
            {
                if ($set -> workday -> phase -> id == 1)
                {
                    if (count($set -> games) > 0) {
                        if ($set -> games[0] -> overtime)
                        {
                            if ($set -> games[0] -> teams[0] -> pivot -> team_id == $team -> id)
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
                            if ($set -> games[0] -> teams[0] -> pivot -> team_id == $team -> id)
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
            }
        }

        $team -> points = $points;

        return view("teams.show", [
            "dateFormat" => HomeController::DATE_FORMAT[app() -> getLocale()],
            "team" => $team,
        ]);
    }
}
