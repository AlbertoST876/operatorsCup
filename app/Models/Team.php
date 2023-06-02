<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Team extends Model
{
    use HasFactory;

    public function members()
    {
        return $this -> hasMany(Member::class) -> where("active", true) -> orderBy("role_id");
    }

    public function sets()
    {
        return $this -> hasMany(Set::class, "teamA") -> orWhere("teamB", $this -> id) -> where("active", true);
    }

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        "name",
        "abbr",
        "logo",
        "email",
        "tel",
        "discord",
        "twitter",
        "twitch",
        "youtube",
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
    protected $casts = [];
}
