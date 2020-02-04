<?php

use Illuminate\Database\Seeder;
use App\Lider;

class LideresSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $lideres = Lider::create([
        	'nombre' => 'Brock',
        	'lugar' => 'Ciudad Plateada',
            'imagen' => 'imagenes/lideres/brock.png',
            'medalla_id' => 1
        ]);
        $lideres = Lider::create([
        	'nombre' => 'Misty',
        	'lugar' => 'Ciudad Celeste',
            'imagen' => 'imagenes/lideres/misty.png',
            'medalla_id' => 2
        ]);
        $lideres = Lider::create([
        	'nombre' => 'Lt. Surge',
        	'lugar' => 'Ciudad Carmin',
            'imagen' => 'imagenes/lideres/surge.png',
            'medalla_id' => 3
        ]);
        $lideres = Lider::create([
        	'nombre' => 'Erika',
        	'lugar' => 'Ciudad Azulona',
            'imagen' => 'imagenes/lideres/erika.png',
            'medalla_id' => 4
        ]);
        $lideres = Lider::create([
        	'nombre' => 'Koga',
        	'lugar' => 'Ciudad Fucsia',
            'imagen' => 'imagenes/lideres/koga.png',
            'medalla_id' => 5
        ]);
        $lideres = Lider::create([
        	'nombre' => 'Sabrina',
        	'lugar' => 'Ciudad Azafran',
            'imagen' => 'imagenes/lideres/sabrina.png',
            'medalla_id' => 6
        ]);
        $lideres = Lider::create([
        	'nombre' => 'Blaine',
        	'lugar' => 'Isla Canela',
            'imagen' => 'imagenes/lideres/blaine.png',
            'medalla_id' => 7
        ]);
        $lideres = Lider::create([
        	'nombre' => 'Giovanni',
        	'lugar' => 'Isla Verde',
            'imagen' => 'imagenes/lideres/giovanni.png',
            'medalla_id' => 8
        ]);
        
    }
}
