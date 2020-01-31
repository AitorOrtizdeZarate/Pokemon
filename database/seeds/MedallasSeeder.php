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
        	'lider' => 'Brock',
        	'lugar' => 'Ciudad Plateada',
            'imagen' => '/imagenes/MedallaRoca.png'
        ]);
        $medallas = Medalla::create([
        	'nombre' => 'Medalla Cascada',
        	'tipo' => 'Agua',
        	'lider' => 'Misty',
        	'lugar' => 'Ciudad Celeste',
            'imagen' => '/imagenes/MedallaCascada.png'
        ]);
        $medallas = Medalla::create([
        	'nombre' => 'Medalla Trueno',
        	'tipo' => 'Electrico',
        	'lider' => 'Lt. Surge',
        	'lugar' => 'Ciudad Carmin',
            'imagen' => '/imagenes/MedallaTrueno.png'
        ]);
        $medallas = Medalla::create([
        	'nombre' => 'Medalla Arcoiris',
        	'tipo' => 'Planta',
        	'lider' => 'Erika',
        	'lugar' => 'Ciudad Azulona',
            'imagen' => '/imagenes/MedallaArcoiris.png'
        ]);
        $medallas = Medalla::create([
        	'nombre' => 'Medalla Alma',
        	'tipo' => 'Veneno',
        	'lider' => 'Koga',
        	'lugar' => 'Ciudad Fucsia',
            'imagen' => '/imagenes/MedallaAlma.png'
        ]);
        $medallas = Medalla::create([
        	'nombre' => 'Medalla Pantano',
        	'tipo' => 'Psiquico',
        	'lider' => 'Sabrina',
        	'lugar' => 'Ciudad Azafran',
            'imagen' => '/imagenes/MedallaPantano.png'
        ]);
        $medallas = Medalla::create([
        	'nombre' => 'Medalla Volcan',
        	'tipo' => 'Fuego',
        	'lider' => 'Blaine',
        	'lugar' => 'Isla Canela',
            'imagen' => '/imagenes/MedallaVolcan.png'
        ]);
        $medallas = Medalla::create([
        	'nombre' => 'Medalla Tierra',
        	'tipo' => 'Tierra',
        	'lider' => 'Giovanni',
        	'lugar' => 'Isla Verde',
            'imagen' => '/imagenes/MedallaTierra.png'
        ]);

    }
}
