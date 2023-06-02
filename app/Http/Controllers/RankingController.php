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
        $teams = Team::where("active", true) -> select("id", "name", "logo") -> get() -> toArray();

        for ($i = 0; $i < count($teams); $i++)
        {
            $points = 0;
            $won = 0;
            $lost = 0;
            $wonOvertime = 0;
            $lostOvertime = 0;
            $roundsWon = 0;
            $roundsLost = 0;

            $games = Set::leftJoin("games", "sets.id", "games.set_id") -> where("sets.teamA", $teams[$i]["id"]) -> orWhere("sets.teamB", $teams[$i]["id"]) -> where("sets.workday_id", "<", 10) -> where("sets.active", true) -> select("games.winner", "games.overtime",  "games.wResult", "games.lResult") -> get();

            foreach ($games as $game)
            {
                if ($game -> overtime)
                {
                    if ($game -> winner == $teams[$i]["id"])
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
                    if ($game -> winner == $teams[$i]["id"])
                    {
                        $won++;
                        $points += 3;
                    }
                    else
                    {
                        $lost++;
                    }
                }

                if ($game -> winner == $teams[$i]["id"])
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

            $teams[$i]["points"] = $points;
            $teams[$i]["won"] = $won;
            $teams[$i]["lost"] = $lost;
            $teams[$i]["wonOvertime"] = $wonOvertime;
            $teams[$i]["lostOvertime"] = $lostOvertime;
            $teams[$i]["roundsDiff"] = $roundsWon - $roundsLost;
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
}
