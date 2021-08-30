<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Player extends Model
{
    use HasFactory;

    public function team(){
        return $this->belongsTo(Team::class, "team_id");
    }

    public function role(){
        return $this->belongsTo(Role::class, "role_id");
    }

    public function photo(){
        return $this->belongsTo(Photo::class, "photo_id");
    }
}
