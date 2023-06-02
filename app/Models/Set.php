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

    public function games()
    {
        return $this -> hasMany(Game::class);
    }

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        "mapban",
        "workday",
        "state",
        "teamA",
        "teamB",
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
