<?php

use Illuminate\Database\Seeder;
use App\MedallaTrainer;

class EntrenadorMedallasSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $entrenadorMedalla = MedallaTrainer::create([
        	'trainer_id' => 1,
        	'medalla_id' => 1
        ]);
    }
}
