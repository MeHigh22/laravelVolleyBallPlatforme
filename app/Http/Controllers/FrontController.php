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

        $outEurope = $teams->where("continent", "!=", 1);
        $inEurope = $teams->where("continent", "=", 1);

        $womanPlayer = $players->where("sex", "=", "Femme");
        $womanRandom = $womanPlayer->where("team_id", "!=", null);
        $manPlayer = $players->where("sex", "=", "Homme");
        $manRandom = $manPlayer->where("team_id", "!=", null);

        $noTeam = $players->where('team_id', '==', null);
        if (count($noTeam) > 4) {
            $noTeamRandom = $noTeam->random(4);
        } else {
            $noTeamRandom = $noTeam;
        }

        $withTeam = $players->where('team_id', '!=', null);
        if (count($withTeam) > 4) {
            $withTeamRandom = $withTeam;
        } else {
            $withTeamRandom = $withTeam;
        }

        return view("welcome", compact("players", "teams", "outEurope", "inEurope", "manPlayer", "womanPlayer", "withTeamRandom", "noTeamRandom"));


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
