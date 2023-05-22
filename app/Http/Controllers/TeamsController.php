<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Team;

class TeamsController extends Controller
{
    /**
     * Instantiate a new controller instance.
     */
    public function __construct()
    {
        $this -> middleware("auth") -> except([
            "index",
            "show",
        ]);
    }

    /**
     * Return view teams
     *
     * @return Response
     */
    public function index()
    {
        return view("teams.index", [
            "teams" => Team::get(),
        ]);
    }

    /**
     * Show the form for creating a new team.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created team in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified team.
     */
    public function show(string $id)
    {
        return view("teams.show", [
            "team" => Team::find($id),
        ]);
    }

    /**
     * Show the form for editing the specified team.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified team in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the team resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
