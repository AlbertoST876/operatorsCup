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
        $teams = Team::where("active", true) -> get();

        foreach ($teams as $team)
        {
            $points = 0;
            $won = 0;
            $lost = 0;
            $wonOvertime = 0;
            $lostOvertime = 0;
            $roundsWon = 0;
            $roundsLost = 0;

            foreach ($team -> sets as $set)
            {
                if ($set -> workday -> phase -> id == 1)
                {
                    if ($set -> games[0] -> overtime)
                    {
                        if ($set -> games[0] -> teams[0] -> pivot -> team_id == $team -> id)
                        {
                            if ($set -> games[0] -> teams[0] -> pivot -> winner)
                            {
                                $wonOvertime++;
                                $points += 2;
                            }
                            else
                            {
                                $lostOvertime++;
                                $points += 1;
                            }
                        }
                        else
                        {
                            if ($set -> games[0] -> teams[1] -> pivot -> winner)
                            {
                                $wonOvertime++;
                                $points += 2;
                            }
                            else
                            {
                                $lostOvertime++;
                                $points += 1;
                            }
                        }
                    }
                    else
                    {
                        if ($set -> games[0] -> teams[0] -> pivot -> team_id == $team -> id)
                        {
                            if ($set -> games[0] -> teams[0] -> pivot -> winner)
                            {
                                $won++;
                                $points += 3;
                            }
                            else
                            {
                                $lost++;
                            }
                        }
                        else
                        {
                            if ($set -> games[0] -> teams[1] -> pivot -> winner)
                            {
                                $won++;
                                $points += 3;
                            }
                            else
                            {
                                $lost++;
                            }
                        }
                    }

                    if ($set -> games[0] -> teams[0] -> pivot -> team_id == $team -> id)
                    {
                        $roundsWon += $set -> games[0] -> teams[0] -> pivot -> result;
                        $roundsLost += $set -> games[0] -> teams[1] -> pivot -> result;
                    }
                    else
                    {
                        $roundsWon += $set -> games[0] -> teams[1] -> pivot -> result;
                        $roundsLost += $set -> games[0] -> teams[0] -> pivot -> result;
                    }
                }
            }

            $team -> points = $points;
            $team -> won = $won;
            $team -> lost = $lost;
            $team -> wonOvertime = $wonOvertime;
            $team -> lostOvertime = $lostOvertime;
            $team -> roundsDiff = $roundsWon - $roundsLost;
        }

        $teams = $teams -> toArray();

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
