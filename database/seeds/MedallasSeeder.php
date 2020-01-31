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
        	'lugar' => 'Ciudad Plateada'
        ]);
        $medallas = Medalla::create([
        	'nombre' => 'Medalla Cascada',
        	'tipo' => 'Agua',
        	'lider' => 'Misty',
        	'lugar' => 'Ciudad Celeste'
        ]);
        $medallas = Medalla::create([
        	'nombre' => 'Medalla Trueno',
        	'tipo' => 'Electrico',
        	'lider' => 'Lt. Surge',
        	'lugar' => 'Ciudad Carmin'
        ]);
        $medallas = Medalla::create([
        	'nombre' => 'Medalla Arcoiris',
        	'tipo' => 'Planta',
        	'lider' => 'Erika',
        	'lugar' => 'Ciudad Azulona'
        ]);
        $medallas = Medalla::create([
        	'nombre' => 'Medalla Alma',
        	'tipo' => 'Veneno',
        	'lider' => 'Koga',
        	'lugar' => 'Ciudad Fucsia'
        ]);
        $medallas = Medalla::create([
        	'nombre' => 'Medalla Pantano',
        	'tipo' => 'Psiquico',
        	'lider' => 'Sabrina',
        	'lugar' => 'Ciudad Azafran'
        ]);
        $medallas = Medalla::create([
        	'nombre' => 'Medalla Volcan',
        	'tipo' => 'Fuego',
        	'lider' => 'Blaine',
        	'lugar' => 'Isla Canela'
        ]);
        $medallas = Medalla::create([
        	'nombre' => 'Medalla Tierra',
        	'tipo' => 'Tierra',
        	'lider' => 'Giovanni',
        	'lugar' => 'Isla Verde'
        ]);

    }
}
