<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Medalla extends Model
{
    public function trainer(){
    	return $this->belongsToMany('App\Trainer');
    }

    public function lider(){
    	return $this->hasOne('App\Lider');
    }
}
