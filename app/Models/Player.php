<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Player extends Model
{
    use HasFactory;

    public function teams(){
        return $this->belongsTo(Team::class, "team_id");
    }

    public function roles(){
        return $this->belongsTo(Role::class, "role_id");
    }

    public function photos(){
        return $this->belongsTo(Photo::class, "photo_id");
    }
}
