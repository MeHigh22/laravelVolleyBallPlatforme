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
        //     'name' => "required",
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

            return redirect("player")->with("success", "Un joueur a bien été crée");

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
        //     'name' => ["required"],
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

            $player->name = $request->name;
            $player->lastname = $request->lastname;
            $player->sex = $request->sex;
            $player->age = $request->age;
            $player->phone = $request->phone;
            $player->email = $request->email;
            $player->country = $request->country;
            $player->photo_id = $request->photo_id;
            $player->role_id = $request->role_id;
            $player->team_id = $request->team_id;

            $update = Photo::find($player->id);
            if($request->file("src") !== null){
                Storage::delete("public/img" . $update->src);
                $update->src = $request->file("src")->hashName();
                Storage::put("public/img", $request->file("src"));
                $update->save();
            }

            return redirect("player")->with("message", "The Player has been modified");

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
