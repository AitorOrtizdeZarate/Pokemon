<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Lider extends Model
{
    public $table = "lideres";

    public function medalla(){
    	return $this->BelongsTo('App\Lider');
    }

    public function pokemon(){
    	return $this->hasOne('App\Pokemon');
    }
}
