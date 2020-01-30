<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Entrenadore;

class listarController extends Controller
{
    public function index(){
    	$entrenadores = Entrenadore::all();
    	return view('welcome', compact('entrenadores'));
    }
}
