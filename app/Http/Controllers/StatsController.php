<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\Response;
use App\Models\Member;

class StatsController extends Controller
{
    /**
     * Return view stats
     *
     * @return Response
     */
    public function index()
    {
        return view("stats", [
            "members" => Member::leftJoin("game_members", "members.id", "game_members.member_id") -> where("members.active", true) -> select("members.nickname AS nickname") -> selectRaw("SUM(game_members.kills) AS kills") -> selectRaw("SUM(game_members.deaths) AS deaths") -> selectRaw("SUM(game_members.assists) AS assists") -> selectRaw("ROUND(SUM(game_members.kills) / SUM(game_members.deaths), 2) AS kd") -> groupBy("game_members.member_id") -> orderByDesc("kd") -> get(),
        ]);
    }
}
