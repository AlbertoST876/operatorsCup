<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\Response;
use App\Models\Team;
use App\Models\Set;

class RankingController extends Controller
{
    /**
     * Return view ranking
     *
     * @return Response
     */
    public function index()
    {
        $teamsDB = Team::where("active", true) -> select("id", "name", "logo") -> get();
        $teams = [];

        foreach ($teamsDB as $team)
        {
            $games = Set::leftJoin("games", "sets.id", "games.set") -> where("sets.teamA", $team -> id) -> orWhere("sets.teamB", $team -> id) -> where("sets.workday", "<", 10) -> where("sets.active", true) -> select("games.winner", "games.overtime",  "games.wResult", "games.lResult") -> get();
            $points = 0;
            $won = 0;
            $lost = 0;
            $wonOvertime = 0;
            $lostOvertime = 0;
            $roundsWon = 0;
            $roundsLost = 0;

            foreach ($games as $game)
            {
                if ($game -> overtime)
                {
                    if ($game -> winner == $team -> id)
                    {
                        $wonOvertime++;
                        $points += 2;
                    }
                    else
                    {
                        $lostOvertime++;
                        $points++;
                    }
                }
                else
                {
                    if ($game -> winner == $team -> id)
                    {
                        $won++;
                        $points += 3;
                    }
                    else
                    {
                        $lost++;
                    }
                }

                if ($game -> winner == $team -> id)
                {
                    $roundsWon += $game -> wResult;
                    $roundsLost += $game -> lResult;
                }
                else
                {
                    $roundsWon += $game -> lResult;
                    $roundsLost += $game -> wResult;
                }
            }

            $teams[] = [
                "info" => $team,
                "points" => $points,
                "won" => $won,
                "lost" => $lost,
                "wonOvertime" => $wonOvertime,
                "lostOvertime" => $lostOvertime,
                "roundsDiff" => $roundsWon - $roundsLost,
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

        return view("ranking.index", [
            "teams" => $teams,
        ]);
    }
}
