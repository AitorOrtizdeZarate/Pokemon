<?php

namespace App\Http\Controllers;
use App\Medalla;

use Illuminate\Http\Request;

class medallasController extends Controller
{
    public function index(){
    	$medallas = Medalla::all();
    	return view('medallas', compact('medallas'));
    }
}
