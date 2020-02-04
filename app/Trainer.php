<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Trainer extends Model
{
    public function medalla(){
    	return $this->belongsToMany('App\Medalla');
    }

    public function pokemon(){
        return $this->hasMany('App\Pokemon');
    }
}
