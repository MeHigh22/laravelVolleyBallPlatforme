<?php

namespace App\Http\Controllers;

use App\Models\Player;
use App\Models\Team;
use Illuminate\Http\Request;

class FrontController extends Controller
{
    public function welcome() {
        $players = Player::all();
        $teams = Team::all();
        $outEurope = $teams->where("continent", "=", 1);
        $inEurope = $teams->where("continent", "!=", 1);
        return view("welcome", compact("players", "teams"));


    }

    //Afficher tout les joueurs

    public function players(){
        $players = Player::all();
        return view("pages.allPlayers", compact("players"));
    }

    //Afficher les équipes

    public function teams(){
        $teams = Team::all();
        return view("pages.allTeams", compact("teams"));
    }

    public function admin()
    {
        return view('admin.adminWelcome');
    }


}
