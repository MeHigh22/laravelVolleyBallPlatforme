<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;


class Team extends Model
{
    use HasFactory;
    public function continent(){
        return $this->belongsTo(Continent::class, 'continent_id');
    }

    public function player(){
        return $this->hasMany(Player::class, "team_id");
    }
}
