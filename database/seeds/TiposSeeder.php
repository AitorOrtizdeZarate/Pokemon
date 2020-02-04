<?php

use Illuminate\Database\Seeder;
use App\Tipo;

class TiposSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $tipos = Tipo::create([
        	'nombre' => 'Agua',
        	'imagen' => '/imagenes/tipos/agua.gif'
        ]);
        $tipos = Tipo::create([
            'nombre' => 'Planta',
            'imagen' => '/imagenes/tipos/planta.gif'
        ]);
        $tipos = Tipo::create([
            'nombre' => 'Fuego',
            'imagen' => '/imagenes/tipos/fuego.gif'
        ]);
        $tipos = Tipo::create([
            'nombre' => 'Veneno',
            'imagen' => '/imagenes/tipos/veneno.gif'
        ]);
        $tipos = Tipo::create([
            'nombre' => 'Dragon',
            'imagen' => '/imagenes/tipos/dragon.gif'
        ]);
        $tipos = Tipo::create([
            'nombre' => 'Siniestro',
            'imagen' => '/imagenes/tipos/siniestro.gif'
        ]);
        $tipos = Tipo::create([
            'nombre' => 'Bicho',
            'imagen' => '/imagenes/tipos/bicho.gif'
        ]);
        $tipos = Tipo::create([
            'nombre' => 'Volador',
            'imagen' => '/imagenes/tipos/volador.gif'
        ]);
        $tipos = Tipo::create([
            'nombre' => 'Roca',
            'imagen' => '/imagenes/tipos/roca.gif'
        ]);
        $tipos = Tipo::create([
            'nombre' => 'Tierra',
            'imagen' => '/imagenes/tipos/tierra.gif'
        ]);
        $tipos = Tipo::create([
            'nombre' => 'Psiquico',
            'imagen' => '/imagenes/tipos/psiquico.gif'
        ]);
        $tipos = Tipo::create([
            'nombre' => 'Normal',
            'imagen' => '/imagenes/tipos/normal.gif'
        ]);
        $tipos = Tipo::create([
            'nombre' => 'Lucha',
            'imagen' => '/imagenes/tipos/lucha.gif'
        ]);
        $tipos = Tipo::create([
            'nombre' => 'Hielo',
            'imagen' => '/imagenes/tipos/hielo.gif'
        ]);
        $tipos = Tipo::create([
            'nombre' => 'Hada',
            'imagen' => '/imagenes/tipos/hada.gif'
        ]);
        $tipos = Tipo::create([
            'nombre' => 'Fantasma',
            'imagen' => '/imagenes/tipos/fantasma.gif'
        ]);
        $tipos = Tipo::create([
            'nombre' => 'Electrico',
            'imagen' => '/imagenes/tipos/electrico.gif'
        ]);
        $tipos = Tipo::create([
            'nombre' => 'Acero',
            'imagen' => '/imagenes/tipos/acero.gif'
        ]);
    }
}
