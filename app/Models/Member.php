<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Member extends Model
{
    use HasFactory;

    public function role()
    {
        return $this -> belongsTo(Role::class) -> select("name_" . app() -> getLocale() . " AS name");
    }

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        "role_id",
        "team_id",
        "nickname",
        "discord",
        "twitter",
        "twitch",
        "youtube",
        "birthday",
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
        "birthday" => "date",
        "active" => "boolean",
    ];
}
