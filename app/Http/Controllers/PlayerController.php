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
        $photos = Photo::all();
        $roles = Role::all();
        $teams = Team::all();
        return view("admin.players.create", compact('genres', "roles", "teams"));

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        request()->validate([
            "name" => ["required"],
            "lastname" => ["required"],
            "sex" => ["required"],
            "age" => ["required", "numeric"],
            "phone" => ["required", "numeric"],
            "email" => ["required", "email"],
            "country" => ["required"],
            "photo_id" => ["required"],
            "role_id" => ["required"],
            "team_id" => ["required"],
        ]);

        $photo = new Photo;
        $photo->src = $request->file("src")->hashName();
        Storage::put("public/img", $request->file("src"));
        $photo->save();

        $role = new Role;
        $team = new Team;

        $store = new Player;
        $store->name = $request->name;
        $store->lastname = $request->lastname;
        $store->sex = $request->sex;
        $store->age = $request->age;
        $store->phone = $request->phone;
        $store->email = $request->email;
        $store->country = $request->country;
        $store->photo_id = $photo->id;
        $store->role_id = $role->id;
        $store->team_id = $team->id;
        $store->save();

        return redirect("admin.players.playersAll")->with("success", "Un joueur a bien été crée");
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Player  $player
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $show = Player::find($id);
        return view("admin.players.show", compact("show"));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Player  $player
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $edit = Player::find($id);
        $photos = Photo::all();
        $roles = Role::all();
        $teams = Team::all();
        return view ("admin.players.playerEdit", compact("edit", "photos", "roles", "teams"));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Player  $player
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id, Player $player)
    {
        request()->validate([
            "name" => ["required"],
            "lastname" => ["required"],
            "sex" => ["required"],
            "age" => ["required", "numeric"],
            "phone" => ["required", "numeric"],
            "email" => ["required", "email"],
            "country" => ["required"],
            "photo_id" => ["required"],
            "role_id" => ["required"],
            "team_id" => ["required"],
        ]);


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

        $update = Photo::find($id);
        if($request->file("src") !== null){
            Storage::delete("public/img" . $update->src);
            $update->src = $request->file("src")->hashName();
            Storage::put("public/img", $request->file("src"));
            $update->save();
        }

        return redirect("admin.players.playersAll")->with("message", "The Player has been modified");

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Player  $player
     * @return \Illuminate\Http\Response
     */
    public function destroy(Player $player)
    {
        //
    }
}
