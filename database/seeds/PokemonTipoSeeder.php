<?php

use Illuminate\Database\Seeder;
use App\PokemonTipo;

class PokemonTipoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //Squirtle
        $pokemonTipo = PokemonTipo::create([
        	'pokemon_id' => 1,
        	'tipo_id' => 1
        ]);

        //Charmander
        $pokemonTipo = PokemonTipo::create([
        	'pokemon_id' => 2,
        	'tipo_id' => 3
        ]);

        //Bulbasaur
        $pokemonTipo = PokemonTipo::create([
        	'pokemon_id' => 3,
        	'tipo_id' => 2
        ]);
        $pokemonTipo = PokemonTipo::create([
        	'pokemon_id' => 3,
        	'tipo_id' => 4
        ]);

        //Deino
        $pokemonTipo = PokemonTipo::create([
        	'pokemon_id' => 4,
        	'tipo_id' => 5
        ]);
        $pokemonTipo = PokemonTipo::create([
        	'pokemon_id' => 4,
        	'tipo_id' => 6
        ]);

        //Blastoise
        $pokemonTipo = PokemonTipo::create([
        	'pokemon_id' => 5,
        	'tipo_id' => 1
        ]);

        //Butterfree
        $pokemonTipo = PokemonTipo::create([
        	'pokemon_id' => 6,
        	'tipo_id' => 7
        ]);
        $pokemonTipo = PokemonTipo::create([
        	'pokemon_id' => 6,
        	'tipo_id' => 8
        ]);

        //Entei
        $pokemonTipo = PokemonTipo::create([
        	'pokemon_id' => 7,
        	'tipo_id' => 3
        ]);

        //Altaria
        $pokemonTipo = PokemonTipo::create([
        	'pokemon_id' => 8,
        	'tipo_id' => 5
        ]);
        $pokemonTipo = PokemonTipo::create([
        	'pokemon_id' => 8,
        	'tipo_id' => 8
        ]);

        //Charizard
        $pokemonTipo = PokemonTipo::create([
            'pokemon_id' => 9,
            'tipo_id' => 3
        ]);
        $pokemonTipo = PokemonTipo::create([
            'pokemon_id' => 9,
            'tipo_id' => 8
        ]);

        //Doublade
        $pokemonTipo = PokemonTipo::create([
            'pokemon_id' => 10,
            'tipo_id' => 18
        ]);
        $pokemonTipo = PokemonTipo::create([
            'pokemon_id' => 10,
            'tipo_id' => 16
        ]);

        //Sceptile
        $pokemonTipo = PokemonTipo::create([
            'pokemon_id' => 11,
            'tipo_id' => 2
        ]);
    }
}
