<?php

namespace App\Http\Controllers;

use App\Models\Photo;
use App\Models\Player;
use App\Models\Role;
use App\Models\Team;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class PlayerController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $players = Player::all();
        return view("admin.players.playersAll", compact('players'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $roles = Role::all();
        $teams = Team::all();
        return view("admin.players.playersCreate", compact("roles", "teams"));

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // $request->validate([
        //     'club' => "required",
        //     'numeric' => "required",
        //     'sex' => "required",
        //     'age' => "required", "numeric",
        //     'phone' => "required", "numeric",
        //     'email' => "required", "email",
        //     'country' => "required",
        //     'photo_id' => "required",
        //     'role_id' => "required",
        //     'team_id' => "required",
        // ]);

            $team = Team::find($request->team_id);

            if($request->team_id == null) {
                $photo = new Photo();
                $photo->src = $request->file("src")->hashName();
                Storage::put("public/img", $request->file("src"));
                $photo->save();

                $store = new Player();
                $store->name = $request->name;
                $store->lastname = $request->lastname;
                $store->sex = $request->sex;
                $store->age = $request->age;
                $store->phone = $request->phone;
                $store->email = $request->email;
                $store->country = $request->country;
                $store->photo_id = $photo->id;
                $store->role_id = $request->role_id;
                $store->team_id = $request->team_id;
                $store->save();

                return redirect("player")->with("success", "A Player has been added");

            } else {

            $avant = Player::all()->where("role_id", 1)->where("team_id", $team->id);
            $central = Player::all()->where("role_id", 2)->where("team_id", $team->id);
            $arriere = Player::all()->where("role_id", 3)->where("team_id", $team->id);


            switch ($request->role_id) {
                case 1:
                    if ($avant->count() === 2) {
                        return redirect()->back()->with("statut", "The team {$team->club} has 2 players for this role");
                    }
                    break;
                case 2:
                    if ($central->count() === 2) {
                        return redirect()->back()->with("statut", "The team {$team->club} has 2 players for this role");
                    }
                    break;
                case 3:
                    if ($arriere->count() === 2) {
                        return redirect()->back()->with("statut", "The team{$team->club} has 2 players for this role");
                    }
                    break;
            }
            $photo = new Photo();
            $photo->src = $request->file("src")->hashName();
            Storage::put("public/img", $request->file("src"));
            $photo->save();

            $store = new Player();
            $store->club = $request->club;
            $store->lastname = $request->lastname;
            $store->sex = $request->sex;
            $store->age = $request->age;
            $store->phone = $request->phone;
            $store->email = $request->email;
            $store->country = $request->country;
            $store->photo_id = $photo->id;
            $store->role_id = $request->role_id;
            $store->team_id = $request->team_id;
            $store->save();
            return redirect("player")->with("success", "A Player has been added");
            }

    }



    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Player  $player
     * @return \Illuminate\Http\Response
     */
    public function show(Player $player)
    {
        $teams = Team::all();
        return view("admin.players.playersShow", compact("player", "teams"));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Player  $player
     * @return \Illuminate\Http\Response
     */
    public function edit(Player $player)
    {
        $roles = Role::all();
        $teams = Team::all();
        return view ("admin.players.playersEdit", compact("player", "roles", "teams"));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Player  $player
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Player $player)
    {
        // $request->validate([
        //     'club' => ["required"],
        //     'lastname' => ["required"],
        //     'sex' => ["required"],
        //     'age' => ["required", "numeric"],
        //     'phone' => ["required", "numeric"],
        //     'email' => ["required", "email"],
        //     'country' => ["required"],
        //     'photo_id' => ["required"],
        //     'role_id' => ["required"],
        //     'team_id' => ["required"],
        // ]);

        $team = Team::find($request->team_id);
        $players = Player::find($player->id);
            if($team->id != null) {
                if (($team->id) != $player->team_id || ($request->role_id) != $player->role_id) {
                    $avant   =Player::all()->where('role_id', 1)->where('team_id', $team->id);
                    $central =Player::all()->where("role_id", 2)->where("team_id", $team->id);
                    $arriere =Player::all()->where("role_id", 3)->where("team_id", $team->id);

                    switch($request->role_id) {
                    case 1:
                        if ($avant->count() === 2) {
                            return back()->with("statut", "The team {$team->club} has reached their maximum players for this role");
                        }
                        break;
                    case 2:
                        if ($central->count() === 2) {
                            return back()->with("statut", "The team {$team->club} has reached their maximum players for this role");
                        }
                        break;
                    case 3:
                        if ($arriere->count() === 2) {
                            return back()->with("statut", "The team {$team->club} has reached their maximum players for this role");
                        }
                        break;
                    }
                }

            Storage::put("public/img", $request->file("src"));
            $player->photos->src = $request->file("src")->hashName();


            $players->name = $request->name;
            $players->lastname = $request->lastname;
            $players->sex = $request->sex;
            $players->age = $request->age;
            $players->phone = $request->phone;
            $players->email = $request->email;
            $players->country = $request->country;
            $players->photo_id = $request->photo_id;
            $players->role_id = $request->role_id;
            if ($request->team_id == null) {
            } else {
                $players->team_id = $request->team_id;
            }
            $players->team_id = $request->team_id;
            $player->push();

            return redirect("player");

            } else {
            if (($team->id == $player->team_id) || ($request->role_id != $player->role_id)) {
                $avant = Player::all()->where("role_id", 1)->where("team_id", $team->id);
                $central = Player::all()->where("role_id", 2)->where("team_id", $team->id);
                $arriere = Player::all()->where("role_id", 3)->where("team_id", $team->id);

                switch ($request->role_id) {
                    case 1:
                        if ($avant->count() === 2) {
                            return back()->with("statut", " The team {$team->club} already has the maximum of players needed");
                        }
                        break;
                    case 2:
                        if ($central->count() === 2) {
                            return back()->with("statut", " The team{$team->club} already has the maximum of players needed");
                        }
                        break;
                    case 3:
                        if ($arriere->count() === 2) {
                            return back()->with("statut", " The team {$team->club} already has the maximum of players needed");
                        }
                        break;
                }

                Storage::put("public/img", $request->file("src"));
                $player->photos->src = $request->file("src")->hashName();

                $players->name = $request->name;
                $players->lastname = $request->lastname;
                $players->sex = $request->sex;
                $players->age = $request->age;
                $players->phone = $request->phone;
                $players->email = $request->email;
                $players->country = $request->country;
                // $players->photo_id = $request->photo_id;
                $players->role_id = $request->role_id;
                if ($request->team_id == null) {
                } else {
                    $players->team_id = $request->team_id;
                }
                $players->team_id = $request->team_id;
                $player->push();
                return redirect("/player")->with("success", "Player has been modified successfully");
            }

            Storage::put("public/img", $request->file("src"));
            $player->photos->src = $request->file("src")->hashName();

            $players->name = $request->name;
            $players->lastname = $request->lastname;
            $players->sex = $request->sex;
            $players->age = $request->age;
            $players->phone = $request->phone;
            $players->email = $request->email;
            $players->country = $request->country;
            // $players->photo_id = $request->photo_id;
            $players->role_id = $request->role_id;
            if ($request->team_id == null) {
            } else {
                $players->team_id = $request->team_id;
            }
            $players->team_id = $request->team_id;
            $player->push();
            return redirect("/player")->with("success", "Player has been modified successfully");
            }
        }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Player  $player
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $player = Player::find($id);
        $player->delete();
        Storage::delete("public/img" . $player->src);

        return redirect()->route("player.index")->with("success","The player has been removed");
    }
}
