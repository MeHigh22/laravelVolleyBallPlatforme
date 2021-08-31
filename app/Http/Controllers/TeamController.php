<?php

namespace App\Http\Controllers;

use App\Models\Continent;
use App\Models\Player;
use App\Models\Team;
use Illuminate\Http\Request;

class TeamController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $teams = Team::all();
        return view("admin.teams.teamsAll", compact("teams"));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $continents = Continent::all();
        return view("admin.teams.teamsCreate", compact("continents"));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'club' => ['required', 'min:5'],
            'city' => ['required', 'min:5'],
            'country' => ['required', 'min:5'],
            'continent_id' => ['required'],
            'maxplayers' => ['required', 'numeric'],
        ]);

        $store = new Team();
        $store->club = $request->club;
        $store->city = $request->city;
        $store->country = $request->country;
        $store->continent_id = $request->continent_id;
        $store->maxplayers = $request->maxplayers;
        $store->save();
        return redirect()->route("team.index")->with("success", "A team has been created !");

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Team  $team
     * @return \Illuminate\Http\Response
     */
    public function show(Team $team)
    {
        $players = Player::all();
        return view("admin.teams.teamsShow", compact("team", "players"));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Team  $team
     * @return \Illuminate\Http\Response
     */
    public function edit(Team $team)
    {
        $continents = Continent::all();
        return view("admin.teams.teamsEdit", compact("team", "continents"));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Team  $team
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Team $team)
    {
        $request->validate([
            'club' => ['required', 'min:5'],
            'city' => ['required', 'min:5'],
            'country' => ['required', 'min:5'],
            'continent_id' => ['required'],
            'maxplayers' => ['required', 'numeric'],
        ]);

        $team->club = $request->club;
        $team->city = $request->city;
        $team->country = $request->country;
        $team->continent_id = $request->continent_id;
        $team->maxplayers = $request->maxplayers;
        $team->save();
        return redirect()->route("team.index")->with("success","The team has been updated successfully.");
    }




    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Team  $team
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $team = Team::find($id);
        $team->delete();
        return redirect()->route("team.index")->with("warning","The team has been deleted successfully.");
    }
}
