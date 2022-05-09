<?php

use App\Inscription;
use Illuminate\Database\Seeder;

class InscriptionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker\Factory::create('fr_FR');
        for ($i = 1; $i <= 10; $i++) {
            Inscription::create([
                'etudiant_id' => $i,
                'matricule' => '1234567'+$i,
                'annee' => 2020,
                'nomClasse' => 'L1',
                'numSemestre' => 1
            ]);
        }
        for ($i = 11; $i <= 20; $i++) {
            Inscription::create([
                'etudiant_id' => $i,
                'matricule' => '1234567'+$i,
                'annee' => 2020,
                'nomClasse' => 'L1',
                'numSemestre' => 2
            ]);
        }
        for ($i = 0; $i < 10; $i++) {
            Inscription::create([
                'etudiant_id' => $i,
                'matricule' => '12345678'+$i,
                'annee' => 2020,
                'nomClasse' => 'L2',
                'numSemestre' => 3
            ]);
        }
    }
}
