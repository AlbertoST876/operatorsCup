<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Set extends Model
{
    use HasFactory;

    public function state()
    {
        return $this -> belongsTo(State::class) -> select("name_" . app() -> getLocale() . " AS name", "color");
    }

    public function teams()
    {
        return $this -> belongsToMany(Team::class, "set_teams");
    }

    public function games()
    {
        return $this -> hasMany(Game::class);
    }

    public function workday()
    {
        return $this -> belongsTo(Workday::class);
    }

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        "mapban",
        "workday_id",
        "state_id",
        "youtube",
        "datetime",
        "active",
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
        "datetime" => "datetime",
        "active" => "boolean",
    ];
}
