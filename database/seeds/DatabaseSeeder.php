<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call(EntrenadoresSeeder::class);
        $this->call(MedallasSeeder::class);
        $this->call(EntrenadorMedallasSeeder::class);

    }
}
