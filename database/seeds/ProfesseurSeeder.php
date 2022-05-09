<?php

use App\Professeur;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ProfesseurSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker\Factory::create('fr_FR');
        Professeur::create([
            'matricule' => '987456321',
            'nom' => $faker->firstName,
            'prenom' => $faker->lastName,
            'email' => 'prof@gmail.com',
            'telephone' => $faker->phoneNumber,
        ]);
        $faker = Faker\Factory::create('fr_FR');
        Professeur::create([
            'matricule' => '1',
            'nom' => $faker->firstName,
            'prenom' => $faker->lastName,
            'email' => 'prof1@gmail.com',
            'telephone' => $faker->phoneNumber,
        ]);
        Professeur::create([
            'matricule' => '2',
            'nom' => $faker->firstName,
            'prenom' => $faker->lastName,
            'email' => 'prof2@gmail.com',
            'telephone' => $faker->phoneNumber,
        ]);
        Professeur::create([
            'matricule' => '3',
            'nom' => $faker->firstName,
            'prenom' => $faker->lastName,
            'email' => 'prof3@gmail.com',
            'telephone' => $faker->phoneNumber,
        ]);
        Professeur::create([
            'matricule' => '4',
            'nom' => $faker->firstName,
            'prenom' => $faker->lastName,
            'email' => 'prof4@gmail.com',
            'telephone' => $faker->phoneNumber,
        ]);
        Professeur::create([
            'matricule' => '5',
            'nom' => $faker->firstName,
            'prenom' => $faker->lastName,
            'email' => 'prof5@gmail.com',
            'telephone' => $faker->phoneNumber,
        ]);
        Professeur::create([
            'matricule' => '6',
            'nom' => $faker->firstName,
            'prenom' => $faker->lastName,
            'email' => 'prof6@gmail.com',
            'telephone' => $faker->phoneNumber,
        ]);
        Professeur::create([
            'matricule' => '7',
            'nom' => $faker->firstName,
            'prenom' => $faker->lastName,
            'email' => 'prof7@gmail.com',
            'telephone' => $faker->phoneNumber,
        ]);
        Professeur::create([
            'matricule' => '8',
            'nom' => $faker->firstName,
            'prenom' => $faker->lastName,
            'email' => 'prof8@gmail.com',
            'telephone' => $faker->phoneNumber,
        ]);
        Professeur::create([
            'matricule' => '9',
            'nom' => $faker->firstName,
            'prenom' => $faker->lastName,
            'email' => 'prof9@gmail.com',
            'telephone' => $faker->phoneNumber,
        ]);
    }
}
