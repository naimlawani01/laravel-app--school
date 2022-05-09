<?php

use App\Etudiant;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class EtudiantSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker\Factory::create('fr_FR');
        for ($i = 1; $i <= 10; $i++) { //reserver les 2 premieres places pour testetudiantseesder
            Etudiant::create([
                'matricule' => '1234567'+$i,
                'nom' => $faker->firstName,
                'prenom' => $faker->lastName,
                'sexe' => 'Homme',
                'dateNaiss' => $faker->date($format = 'Y-m-d', $max = 'now'),
                'lieuNaiss' => $faker->city,
                'email'=> $faker->email,
                'nationalite' => $faker->city,
                'filiation' => $faker->firstName . '  ' . $faker->lastName,
                'cohorte' => 11,
            ]);
        }
        for ($i = 1; $i <= 10; $i++) {
            Etudiant::create([
                'matricule' => '12345678'+$i,
                'nom' => $faker->firstName,
                'prenom' => $faker->lastName,
                'sexe' => 'Femme',
                'dateNaiss' => $faker->date($format = 'Y-m-d', $max = 'now'),
                'lieuNaiss' => $faker->city,
                'email'=> $faker->email,
                'nationalite' => $faker->city,
                'filiation' => $faker->firstName . '  ' . $faker->lastName,
                'cohorte' => 11,
            ]);
        }
    }
}
