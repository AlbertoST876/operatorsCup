<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\Response;
use App\Models\Team;
use App\Models\Set;

class HomeController extends Controller
{
    /**
     * Return view index
     *
     * @return Response
     */
    public function index()
    {
        return view("index");
    }

    /**
     * Return view rules
     *
     * @return Response
     */
    public function rules()
    {
        return view("rules");
    }

    /**
     * Return view ranking
     *
     * @return Response
     */
    public function ranking()
    {
        $teamsDB = Team::select("id", "name", "logo", "active") -> get();
        $teams = [];

        foreach ($teamsDB as $team)
        {
            $games = Set::leftJoin("games", "sets.id", "games.set") -> where("sets.winner", $team -> id) -> orWhere("sets.loser", $team -> id) -> where("sets.workday", "<", 10) -> select("games.winner", "games.overtime",  "games.wResult", "games.lResult") -> get();
            $points = 0;
            $wins = 0;
            $loses = 0;
            $winsOvertime = 0;
            $losesOvertime = 0;
            $roundsWin = 0;
            $roundsLose = 0;

            foreach ($games as $game)
            {
                if ($game -> overtime)
                {
                    if ($game -> winner == $team -> id)
                    {
                        $winsOvertime++;
                        $points += 2;
                    }
                    else
                    {
                        $losesOvertime++;
                        $points++;
                    }
                }
                else
                {
                    if ($game -> winner == $team -> id)
                    {
                        $wins++;
                        $points += 3;
                    }
                    else
                    {
                        $loses++;
                    }
                }

                if ($game -> winner == $team -> id)
                {
                    $roundsWin += $game -> wResult;
                    $roundsLose += $game -> lResult;
                }
                else
                {
                    $roundsWin += $game -> lResult;
                    $roundsLose += $game -> wResult;
                }
            }

            $teams[] = [
                "info" => $team,
                "points" => $points,
                "wins" => $wins,
                "loses" => $loses,
                "winsOvertime" => $winsOvertime,
                "losesOvertime" => $losesOvertime,
                "roundsDiff" => $roundsWin - $roundsLose,
            ];
        }

        usort($teams, function($teamA, $teamB) {
            if ($teamA["points"] == $teamB["points"])
            {
                return 0;
            }

            return ($teamA["points"] > $teamB["points"]) ? -1 : 1;
        });

        usort($teams, function($teamA, $teamB) {
            if ($teamA["roundsDiff"] == $teamB["roundsDiff"])
            {
                return 0;
            }

            return ($teamA["roundsDiff"] > $teamB["roundsDiff"]) ? -1 : 1;
        });

        return view("ranking", [
            "teams" => $teams,
        ]);
    }

    /**
     * Return view stats
     *
     * @return Response
     */
    public function stats()
    {
        return view("stats");
    }
}
