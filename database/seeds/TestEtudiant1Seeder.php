<?php

use App\Etudiant;
use App\Inscription;
use App\Evaluation_l1;
use Illuminate\Database\Seeder;

class TestEtudiant1Seeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker\Factory::create('fr_FR');

        Etudiant::create([
            'matricule' => '664018371730',
            'nom' => 'TRAORE',
            'prenom' => 'Mamoudou',
            'sexe' => 'Homme',
            'dateNaiss' => $faker->date($format = 'Y-m-d', $max = 'now'),
            'lieuNaiss' => $faker->city,
            'email'=> 'etudiant@gmail.com',
            'nationalite' => $faker->city,
            'filiation' => $faker->firstName . '  ' . $faker->lastName,
            'cohorte' => 11,
        ]);

        Inscription::create([
            'etudiant_id' => 1,
            'matricule' => '664018371730',
            'annee' => 2020,
            'nomClasse' => 'L1',
            'numSemestre' => 1
        ]);

        Inscription::create([
            'etudiant_id' => 1,
            'matricule' => '664018371730',
            'annee' => 2020,
            'nomClasse' => 'L1',
            'numSemestre' => 2
        ]);

        Evaluation_l1::create([
            'matricule' => '664018371730',
            'etudiant_id' => 1,
            'matiere_id' => 1,
            'nomMatiere' => "Algorithme",
            'annee' => "2020",
            'numSemestre' => 1,
            'nomClasse' => "L1",
            'note1'  => $faker->numberBetween($min = 3, $max = 9),
            'note2'  => $faker->numberBetween($min = 5, $max = 9),
            'note3'  => $faker->numberBetween($min = 5, $max = 9),
            'moyenne'  => $faker->numberBetween($min = 5, $max = 9),
        
        ]);

        Evaluation_l1::create([
            'matricule' => '664018371730',
            'etudiant_id' => 1,
            'matiere_id' => 2,
            'nomMatiere' => "archi",
            'annee' => "2020",
            'numSemestre' => 1,
            'nomClasse' => "L1",
            'note1'  => $faker->numberBetween($min = 3, $max = 9),
            'note2'  => $faker->numberBetween($min = 4, $max = 9),
            'note3'  => $faker->numberBetween($min = 4, $max = 9),
            'moyenne'  => $faker->numberBetween($min = 5, $max = 9),
        
        ]);

        Evaluation_l1::create([
            'matricule' => '664018371730',
            'etudiant_id' => 1,
            'matiere_id' => 3,
            'nomMatiere' => "Math",
            'annee' => "2020",
            'numSemestre' => 1,
            'nomClasse' => "L1",
            'note1'  => $faker->numberBetween($min = 3, $max = 9),
            'note2'  => $faker->numberBetween($min = 5, $max = 9),
            'note3'  => $faker->numberBetween($min = 5, $max = 9),
            'moyenne'  => $faker->numberBetween($min = 5, $max = 9),
        
        ]);
   
    
        Evaluation_l1::create([
            'matricule' => '664018371730',
            'etudiant_id' => 1,
            'matiere_id' => 4,
            'nomMatiere' => "Technique expression",
            'annee' => "2020",
            'numSemestre' => 1,
            'nomClasse' => "L1",
            'note1'  => $faker->numberBetween($min = 3, $max = 9),
            'note2'  => $faker->numberBetween($min = 5, $max = 9),
            'note3'  => $faker->numberBetween($min = 5, $max = 9),
            'moyenne'  => $faker->numberBetween($min = 5, $max = 9),
        
        ]);
   

        Evaluation_l1::create([
            'matricule' => '664018371730',
            'etudiant_id' => 1,
            'matiere_id' => 5,
            'nomMatiere' => "Info de base",
            'annee' => "2020",
            'numSemestre' => 1,
            'nomClasse' => "L1",
            'note1'  => $faker->numberBetween($min = 3, $max = 9),
            'note2'  => $faker->numberBetween($min = 5, $max = 9),
            'note3'  => $faker->numberBetween($min = 5, $max = 9),
            'moyenne'  => $faker->numberBetween($min = 5, $max = 9),
        
        ]);



        Evaluation_l1::create([
            'matricule' => '664018371730',
            'etudiant_id' => 1,
            'matiere_id' => 6,
            'nomMatiere' => "Probabilité et statistique",
            'annee' => "2020",
            'numSemestre' => 2,
            'nomClasse' => "L1",
            'note1'  => $faker->numberBetween($min = 3, $max = 9),
            'note2'  => $faker->numberBetween($min = 4, $max = 9),
            'note3'  => $faker->numberBetween($min = 4, $max = 9),
            'moyenne'  => $faker->numberBetween($min = 5, $max = 9),
        
        ]);
   
        Evaluation_l1::create([
            'matricule' => '664018371730',
            'etudiant_id' => 1,
            'matiere_id' => 7,
            'nomMatiere' => "CSI",
            'annee' => "2020",
            'numSemestre' => 2,
            'nomClasse' => "L1",
            'note1'  => $faker->numberBetween($min = 3, $max = 9),
            'note2'  => $faker->numberBetween($min = 4, $max = 9),
            'note3'  => $faker->numberBetween($min = 4, $max = 9),
            'moyenne'  => $faker->numberBetween($min = 5, $max = 9),
        
        ]);
    
        Evaluation_l1::create([
            'matricule' => '664018371730',
            'etudiant_id' => 1,
            'matiere_id' => 8,
            'nomMatiere' => "Web1",
            'annee' => "2020",
            'numSemestre' => 2,
            'nomClasse' => "L1",
            'note1'  => $faker->numberBetween($min = 3, $max = 9),
            'note2'  => $faker->numberBetween($min = 4, $max = 9),
            'note3'  => $faker->numberBetween($min = 4, $max = 9),
            'moyenne'  => $faker->numberBetween($min = 5, $max = 9),
        
        ]);
  
   
        Evaluation_l1::create([
            'matricule' => '664018371730',
            'etudiant_id' => 1,
            'matiere_id' => 9,
            'nomMatiere' => "Architecture des ordi",
            'annee' => "2020",
            'numSemestre' => 2,
            'nomClasse' => "L1",
            'note1'  => $faker->numberBetween($min = 3, $max = 9),
            'note2'  => $faker->numberBetween($min = 4, $max = 9),
            'note3'  => $faker->numberBetween($min = 4, $max = 9),
            'moyenne'  => $faker->numberBetween($min = 5, $max = 9),
        
        ]);
   
        // Evaluation_l1::create([
        //     'matricule' => '664018371730',
        //     'etudiant_id' => 1,
        //     'matiere_id' => 10,
        //     'nomMatiere' => "STD",
        //     'annee' => "2020",
        //     'numSemestre' => 2,
        //     'nomClasse' => "L1",
        //     'note1'  => $faker->numberBetween($min = 3, $max = 9),
        //     'note2'  => $faker->numberBetween($min = 4, $max = 9),
        //     'note3'  => $faker->numberBetween($min = 4, $max = 9),
        //     'moyenne'  => $faker->numberBetween($min = 5, $max = 9),

        // ]);
    }
}
