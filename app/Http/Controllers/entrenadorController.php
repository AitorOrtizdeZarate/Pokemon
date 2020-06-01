<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Trainer;

class entrenadorController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $entrenadores = Trainer::all();
        return view('welcome', compact('entrenadores'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $entrenadores = Trainer::all();
        return view('CrearTrainer')->with('entrenadores', $entrenadores);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {   
        $request->validate([
            'nombre' => 'required', 
            'apelldio' => 'required',
            'descripcion' => 'required'
        ]);

        $entrenador = new Trainer;
        $entrenador->nombre = $request->input('nombre');
        $entrenador->apellido = $request->input('apellido');
        $entrenador->descripcion = $request->input('descripcion');
        $entrenador->save;
        return view('welcome');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $entrenadores = Trainer::find($id);
        //dd($entrenadores);
        return view('entrenador')->with('entrenadores', $entrenadores);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $entrenador = Trainer::find($id);
        $entrenador->delete();
        return view('welcome');
    }
}
