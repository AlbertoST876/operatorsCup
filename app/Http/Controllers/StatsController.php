<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Support\Facades\DB;
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
        $members = Member::leftJoin("game_members", "members.id", "game_members.member") -> where("members.active", true) -> select("members.nickname AS nickname", DB::raw("SUM(game_members.kills) AS kills"), DB::raw("SUM(game_members.deaths) AS deaths"), DB::raw("SUM(game_members.assists) AS assists"), DB::raw("ROUND(SUM(game_members.kills) / SUM(game_members.deaths), 2) AS kd")) -> groupBy("game_members.member") -> orderBy("kd", "DESC") -> get();

        return view("stats", [
            "members" => $members,
        ]);
    }
}
