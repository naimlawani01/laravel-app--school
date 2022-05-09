<?php

use App\Classe;
use Illuminate\Database\Seeder;

class ClasseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker\Factory::create('fr_FR');
        Classe::create([
            'nomClasse' => 'L1',
            'nomProg' => 'Programmation',
        ]);
        Classe::create([
            'nomClasse' => 'L2',
            'nomProg' => 'Programmation',
        ]);
    }
}
