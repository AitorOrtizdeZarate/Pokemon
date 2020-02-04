<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Medalla;

class liderController extends Controller
{
	public function index($id){
		$medalla = Medalla::find($id);
    	return view('lideres', compact('medalla'));
	}
}
