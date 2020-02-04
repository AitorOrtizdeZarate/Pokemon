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
        $pokemonTipo = PokemonTipo::create([
        	'pokemon_id' => 1,
        	'tipo_id' => 1
        ]);
        $pokemonTipo = PokemonTipo::create([
        	'pokemon_id' => 2,
        	'tipo_id' => 3
        ]);
        $pokemonTipo = PokemonTipo::create([
        	'pokemon_id' => 3,
        	'tipo_id' => 2
        ]);
        $pokemonTipo = PokemonTipo::create([
        	'pokemon_id' => 3,
        	'tipo_id' => 4
        ]);
        $pokemonTipo = PokemonTipo::create([
        	'pokemon_id' => 4,
        	'tipo_id' => 5
        ]);
        $pokemonTipo = PokemonTipo::create([
        	'pokemon_id' => 4,
        	'tipo_id' => 6
        ]);
        $pokemonTipo = PokemonTipo::create([
        	'pokemon_id' => 5,
        	'tipo_id' => 1
        ]);
        $pokemonTipo = PokemonTipo::create([
        	'pokemon_id' => 6,
        	'tipo_id' => 7
        ]);
        $pokemonTipo = PokemonTipo::create([
        	'pokemon_id' => 6,
        	'tipo_id' => 8
        ]);
        $pokemonTipo = PokemonTipo::create([
        	'pokemon_id' => 7,
        	'tipo_id' => 3
        ]);
        $pokemonTipo = PokemonTipo::create([
        	'pokemon_id' => 8,
        	'tipo_id' => 5
        ]);
        $pokemonTipo = PokemonTipo::create([
        	'pokemon_id' => 8,
        	'tipo_id' => 8
        ]);
        $pokemonTipo = PokemonTipo::create([
            'pokemon_id' => 9,
            'tipo_id' => 3
        ]);
        $pokemonTipo = PokemonTipo::create([
            'pokemon_id' => 9,
            'tipo_id' => 8
        ]);
    }
}
