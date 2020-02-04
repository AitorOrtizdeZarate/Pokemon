<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Tipo extends Model
{
    public $table = 'tipos';

    public function pokemon(){
    	return $this->belongsToMany('App\Pokemon');
    }
}
