<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Game extends Model
{
    use HasFactory;

    public function teams()
    {
        return $this -> belongsToMany(Team::class, "game_teams") -> withPivot("winner", "result");
    }

    public function members()
    {
        return $this -> belongsToMany(Member::class, "game_members") -> withPivot("team_id", "kills", "deaths", "assists") -> selectRaw("members.nickname, game_members.kills, game_members.deaths, game_members.assists, ROUND(game_members.kills / game_members.deaths, 2) AS kd") -> orderByDesc("kd");
    }

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        "set_id",
        "overtime",
    ];

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array<int, string>
     */
    protected $hidden = [];

    /**
     * The attributes that should be cast.
     *
     * @var array<string, string>
     */
    protected $casts = [
        "overtime" => "boolean",
    ];
}
