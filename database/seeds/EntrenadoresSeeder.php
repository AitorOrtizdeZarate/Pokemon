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
            'descripcion' => 'Uno de los mejores entrenadores de este planeta y guapo.',
            'imagen' => '/imagenes/aitor.jpg'
		]);
        $entrenadores = Entrenadore::create([
    		'nombre' => 'Adrian',
            'apellido' => 'Gomez',
            'descripcion' => 'Un manin de la vida y chico sad.',
            'imagen' => '/imagenes/adrian.png'
		]);
        $entrenadores = Entrenadore::create([
            'nombre' => 'Asier',
            'apellido' => 'Fernandez',
            'descripcion' => 'La mayoria de sus pokemon son mas grandes que el.',
            'imagen' => '/imagenes/Asier.png'
        ]);
        $entrenadores = Entrenadore::create([
            'nombre' => 'Adrian',
            'apellido' => 'Rodriguez',
            'descripcion' => 'Jasnas love',
            'imagen' => '/imagenes/Adrian2.jpg'
        ]);
        $entrenadores = Entrenadore::create([
            'nombre' => 'David',
            'apellido' => 'Belinchon'
        ]);
        $entrenadores = Entrenadore::create([
            'nombre' => 'Jeffry',
            'apellido' => 'Molina',
            'imagen' => '/imagenes/jeffry.png'
        ]);
    }
}
