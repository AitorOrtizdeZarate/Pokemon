<?php

use Illuminate\Database\Seeder;
use App\Medalla;

class MedallasSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $medallas = Medalla::create([
        	'nombre' => 'Medalla Roca',
        	'tipo' => 'Roca',
            'imagen' => '/imagenes/MedallaRoca.png'
        ]);
        $medallas = Medalla::create([
        	'nombre' => 'Medalla Cascada',
        	'tipo' => 'Agua',
            'imagen' => '/imagenes/MedallaCascada.png'
        ]);
        $medallas = Medalla::create([
        	'nombre' => 'Medalla Trueno',
        	'tipo' => 'Electrico',
            'imagen' => '/imagenes/MedallaTrueno.png'
        ]);
        $medallas = Medalla::create([
        	'nombre' => 'Medalla Arcoiris',
        	'tipo' => 'Planta',
            'imagen' => '/imagenes/MedallaArcoiris.png'
        ]);
        $medallas = Medalla::create([
        	'nombre' => 'Medalla Alma',
        	'tipo' => 'Veneno',
            'imagen' => '/imagenes/MedallaAlma.png'
        ]);
        $medallas = Medalla::create([
        	'nombre' => 'Medalla Pantano',
        	'tipo' => 'Psiquico',
            'imagen' => '/imagenes/MedallaPantano.png'
        ]);
        $medallas = Medalla::create([
        	'nombre' => 'Medalla Volcan',
        	'tipo' => 'Fuego',
            'imagen' => '/imagenes/MedallaVolcan.png'
        ]);
        $medallas = Medalla::create([
        	'nombre' => 'Medalla Tierra',
        	'tipo' => 'Tierra',
            'imagen' => '/imagenes/MedallaTierra.png'
        ]);

    }
}
