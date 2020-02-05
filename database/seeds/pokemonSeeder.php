<?php

use Illuminate\Database\Seeder;
use App\Pokemon;

class pokemonSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $pokemon = Pokemon::create([
            'nombre' => 'Squirtle',
            'imagen' => '/imagenes/pokemon/squirtle.png',
            'trainer_id' => 2
        ]);
        $pokemon = Pokemon::create([
            'nombre' => 'Charmander',
            'imagen' => '/imagenes/pokemon/charmander.png',
            'trainer_id' => 3
        ]);
        $pokemon = Pokemon::create([
            'nombre' => 'Bulbasaur',
            'imagen' => '/imagenes/pokemon/bulbasaur.png',
            'trainer_id' => 4
        ]);
        $pokemon = Pokemon::create([
            'nombre' => 'Deino',
            'imagen' => '/imagenes/pokemon/deino.png',
            'trainer_id' => 1
        ]);
        $pokemon = Pokemon::create([
            'nombre' => 'Blastoise',
            'imagen' => '/imagenes/pokemon/blastoise.png',
            'trainer_id' => 6
        ]);
        $pokemon = Pokemon::create([
            'nombre' => 'Butterfree',
            'imagen' => '/imagenes/pokemon/butterfly.png',
            'trainer_id' => 6
        ]);
        $pokemon = Pokemon::create([
            'nombre' => 'Entei',
            'imagen' => '/imagenes/pokemon/entei.png',
            'trainer_id' => 7
        ]);
        $pokemon = Pokemon::create([
            'nombre' => 'Altaria',
            'imagen' => '/imagenes/pokemon/altaria.png',
            'trainer_id' => 7
        ]);
        $pokemon = Pokemon::create([
            'nombre' => 'Charizard',
            'imagen' => '/imagenes/pokemon/charizard.png',
            'trainer_id' => 2
        ]);
        $pokemon = Pokemon::create([
            'nombre' => 'Doublade',
            'imagen' => '/imagenes/pokemon/doublade.png',
            'trainer_id' => 5
        ]);
        $pokemon = Pokemon::create([
            'nombre' => 'Sceptile',
            'imagen' => '/imagenes/pokemon/sceptile.png',
            'trainer_id' => 1
        ]);
        $pokemon = Pokemon::create([
            'nombre' => 'Piplup',
            'imagen' => '/imagenes/pokemon/piplup.png',
            'trainer_id' => 6
        ]);
         $pokemon = Pokemon::create([
            'nombre' => 'Serperior',
            'imagen' => '/imagenes/pokemon/serperior.png',
            'trainer_id' => 6
        ]);
          $pokemon = Pokemon::create([
            'nombre' => 'Pichu',
            'imagen' => '/imagenes/pokemon/pichu.png',
            'trainer_id' => 6
        ]);
           $pokemon = Pokemon::create([
            'nombre' => 'Xerneas',
            'imagen' => '/imagenes/pokemon/xerneas.png',
            'trainer_id' => 6
        ]);
        $pokemon = Pokemon::create([
            'nombre' => 'Geodude',
            'imagen' => '/imagenes/pokemon/geodude.png',
            'lider_id' => 1
        ]);
    }
}
