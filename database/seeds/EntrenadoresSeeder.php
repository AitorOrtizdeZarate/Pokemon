<?php

use Illuminate\Database\Seeder;
use App\Trainer;

class EntrenadoresSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $entrenadores = Trainer::create([
    		'nombre' => 'Aitor',
            'apellido' => 'Ortiz de Zarate',
            'descripcion' => 'Uno de los mejores entrenadores de este planeta y guapo.',
            'imagen' => '/imagenes/aitor.jpg'
		]);
        $entrenadores = Trainer::create([
    		'nombre' => 'Adrian',
            'apellido' => 'Gomez',
            'descripcion' => 'Un manin de la vida y chico sad.',
            'imagen' => '/imagenes/adrian.png'
		]);
        $entrenadores = Trainer::create([
            'nombre' => 'Asier',
            'apellido' => 'Fernandez',
            'descripcion' => 'La mayoria de sus pokemon son mas grandes que el.',
            'imagen' => '/imagenes/Asier.png'
        ]);
        $entrenadores = Trainer::create([
            'nombre' => 'Adrian',
            'apellido' => 'Rodriguez',
            'descripcion' => 'Amante de los cafes y Jasnas love',
            'imagen' => '/imagenes/Adrian2.jpg'
        ]);
        $entrenadores = Trainer::create([
            'nombre' => 'David',
            'apellido' => 'Belinchon',
            'descripcion' => 'Amante de los coches',
            'imagen' => '/imagenes/david.png'
        ]);
        $entrenadores = Trainer::create([
            'nombre' => 'Alex',
            'apellido' => 'Zamarreño',
            'descripcion' => 'No para de beber.',
            'imagen' => '/imagenes/zama.png'
        ]);
        $entrenadores = Trainer::create([
            'nombre' => 'Joseba',
            'apellido' => 'De la Puente',
            'descripcion' => 'Un putito nigi',
            'imagen' => '/imagenes/jox.png'
        ]);
        
    }
}
