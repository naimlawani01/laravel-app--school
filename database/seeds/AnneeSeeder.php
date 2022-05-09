<?php

use App\Annee;
use Illuminate\Database\Seeder;

class AnneeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker\Factory::create('fr_FR');
        Annee::create([
            'annee' => 2018,
        ]);
        Annee::create([
            'annee' => 2019,
        ]);
        Annee::create([
            'annee' => 2020,
        ]);
    }
}
