<?php

use Illuminate\Database\Seeder;
use App\Entrenadore;

class EntrenadoresSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $entrenadores = Entrenadore::create([
    		'nombre' => 'Aitor',
            'apellido' => 'Ortiz de Zarate',
            'imagen' => '/imagenes/aitor.jpg'
		]);
        $entrenadores = Entrenadore::create([
    		'nombre' => 'Adrian',
            'apellido' => 'Gomez',
            'imagen' => '/imagenes/adrian.png'
		]);
        $entrenadores = Entrenadore::create([
            'nombre' => 'Asier',
            'apellido' => 'Fernandez',
            'imagen' => '/imagenes/Asier.png'
        ]);
        $entrenadores = Entrenadore::create([
            'nombre' => 'Adrian',
            'apellido' => 'Rodriguez',
            'imagen' => '/imagenes/Adrian2.jpg'
        ]);
    }
}
