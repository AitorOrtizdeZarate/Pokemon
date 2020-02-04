<?php

namespace App;


use Illuminate\Database\Eloquent\Model;

class Pokemon extends Model
{
    public $table = 'pokemon';

    public function entrenador(){
        return $this->belongsTo('App\Trainer');
    }

    public function tipos(){
    	return $this->belongsToMany('App\Tipo');
    }
}
