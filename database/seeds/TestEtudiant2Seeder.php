<?php

use App\Etudiant;
use App\Inscription;
use App\Evaluation_l1;
use App\Evaluation_l2;
use Illuminate\Database\Seeder;

class TestEtudiant2Seeder extends Seeder
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
            'matricule' => '664018374578',
            'nom' => 'DOUMBOUYA',
            'prenom' => 'Sandaly',
            'sexe' => 'Homme',
            'dateNaiss' => $faker->date($format = 'Y-m-d', $max = 'now'),
            'lieuNaiss' => $faker->city,
            'email'=> 'scandale@gmail.com',
            'nationalite' => $faker->city,
            'filiation' => $faker->firstName . '  ' . $faker->lastName,
            'cohorte' => 11,
        ]);

        Inscription::create([
            'etudiant_id' => 2,
            'matricule' => '664018374578',
            'annee' => 2020,
            'nomClasse' => 'L1',
            'numSemestre' => 1
        ]);
        Inscription::create([
            'etudiant_id' => 2,
            'matricule' => '664018374578',
            'annee' => 2020,
            'nomClasse' => 'L1',
            'numSemestre' => 2
        ]);
        Inscription::create([
            'etudiant_id' => 2,
            'matricule' => '664018374578',
            'annee' => 2020,
            'nomClasse' => 'L2',
            'numSemestre' => 3
        ]);
        Inscription::create([
            'etudiant_id' => 2,
            'matricule' => '664018374578',
            'annee' => 2020,
            'nomClasse' => 'L2',
            'numSemestre' => 4
        ]);

        Evaluation_l1::create([
            'matricule' => '664018374578',
            'etudiant_id' => 2,
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
            'matricule' => '664018374578',
            'etudiant_id' => 2,
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
            'matricule' => '664018374578',
            'etudiant_id' => 2,
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
            'matricule' => '664018374578',
            'etudiant_id' => 2,
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
            'matricule' => '664018374578',
            'etudiant_id' => 2,
            'matiere_id' => 5,
            'nomMatiere' => "Info de base",
            'annee' => "2020",
            'numSemestre' => 1,
            'nomClasse' => "L1",
            'note1'  => $faker->numberBetween($min = 3, $max = 9),
            'note2'  => $faker->numberBetween($min = 5, $max = 9),
            'note3'  => $faker->numberBetween($min = 5, $max = 9),
            'moyenne'  => $faker->numberBetween($min = 1, $max = 4),
        
        ]);



        Evaluation_l1::create([
            'matricule' => '664018374578',
            'etudiant_id' => 2,
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
            'matricule' => '664018374578',
            'etudiant_id' => 2,
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
            'matricule' => '664018374578',
            'etudiant_id' => 2,
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
            'matricule' => '664018374578',
            'etudiant_id' => 2,
            'matiere_id' => 9,
            'nomMatiere' => "Architecture des ordi",
            'annee' => "2020",
            'numSemestre' => 2,
            'nomClasse' => "L1",
            'note1'  => $faker->numberBetween($min = 3, $max = 9),
            'note2'  => $faker->numberBetween($min = 4, $max = 9),
            'note3'  => $faker->numberBetween($min = 4, $max = 9),
            'moyenne'  => $faker->numberBetween($min = 2, $max = 4),
        
        ]);
        Evaluation_l1::create([
            'matricule' => '664018374578',
            'etudiant_id' => 2,
            'matiere_id' => 10,
            'nomMatiere' => "STD",
            'annee' => "2020",
            'numSemestre' => 2,
            'nomClasse' => "L1",
            'note1'  => $faker->numberBetween($min = 3, $max = 9),
            'note2'  => $faker->numberBetween($min = 4, $max = 9),
            'note3'  => $faker->numberBetween($min = 4, $max = 9),
            'moyenne'  => $faker->numberBetween($min = 2, $max = 4),

        ]);

        Evaluation_l2::create([
            'matricule' => '664018374578',
            'etudiant_id' => 2,
            'matiere_id' => 11,
            'nomMatiere' => "Anglais",
            'annee' => "2020",
            'numSemestre' => 3,
            'nomClasse' => "L2",
            'note1'  => $faker->numberBetween($min = 3, $max = 9),
            'note2'  => $faker->numberBetween($min = 4, $max = 9),
            'note3'  => $faker->numberBetween($min = 4, $max = 9),
            'moyenne'  => $faker->numberBetween($min = 2, $max = 4),

        ]);
        Evaluation_l2::create([
            'matricule' => '664018374578',
            'etudiant_id' => 2,
            'matiere_id' => 12,
            'nomMatiere' => "C++",
            'annee' => "2020",
            'numSemestre' => 3,
            'nomClasse' => "L2",
            'note1'  => $faker->numberBetween($min = 3, $max = 9),
            'note2'  => $faker->numberBetween($min = 4, $max = 9),
            'note3'  => $faker->numberBetween($min = 4, $max = 9),
            'moyenne'  => $faker->numberBetween($min = 5, $max = 9),

        ]);
        Evaluation_l2::create([
            'matricule' => '664018374578',
            'etudiant_id' => 2,
            'matiere_id' => 13,
            'nomMatiere' => "Web2",
            'annee' => "2020",
            'numSemestre' => 3,
            'nomClasse' => "L2",
            'note1'  => $faker->numberBetween($min = 3, $max = 9),
            'note2'  => $faker->numberBetween($min = 4, $max = 9),
            'note3'  => $faker->numberBetween($min = 4, $max = 9),
            'moyenne'  => $faker->numberBetween($min = 5, $max = 9),

        ]);
        Evaluation_l2::create([
            'matricule' => '664018374578',
            'etudiant_id' => 2,
            'matiere_id' => 14,
            'nomMatiere' => "Linux Avancé",
            'annee' => "2020",
            'numSemestre' => 3,
            'nomClasse' => "L2",
            'note1'  => $faker->numberBetween($min = 3, $max = 9),
            'note2'  => $faker->numberBetween($min = 4, $max = 9),
            'note3'  => $faker->numberBetween($min = 4, $max = 9),
            'moyenne'  => $faker->numberBetween($min = 5, $max = 9),

        ]);
        Evaluation_l2::create([
            'matricule' => '664018374578',
            'etudiant_id' => 2,
            'matiere_id' => 15,
            'nomMatiere' => "UML",
            'annee' => "2020",
            'numSemestre' => 3,
            'nomClasse' => "L2",
            'note1'  => $faker->numberBetween($min = 3, $max = 9),
            'note2'  => $faker->numberBetween($min = 4, $max = 9),
            'note3'  => $faker->numberBetween($min = 4, $max = 9),
            'moyenne'  => $faker->numberBetween($min = 5, $max = 9),

        ]);
        Evaluation_l2::create([
            'matricule' => '664018374578',
            'etudiant_id' => 2,
            'matiere_id' => 16,
            'nomMatiere' => "Admin reseau",
            'annee' => "2020",
            'numSemestre' => 4,
            'nomClasse' => "L2",
            'note1'  => $faker->numberBetween($min = 3, $max = 9),
            'note2'  => $faker->numberBetween($min = 4, $max = 9),
            'note3'  => $faker->numberBetween($min = 4, $max = 9),
            'moyenne'  => $faker->numberBetween($min = 5, $max = 9),

        ]);
        Evaluation_l2::create([
            'matricule' => '664018374578',
            'etudiant_id' => 2,
            'matiere_id' => 17,
            'nomMatiere' => "Laravel",
            'annee' => "2020",
            'numSemestre' => 4,
            'nomClasse' => "L2",
            'note1'  => $faker->numberBetween($min = 3, $max = 9),
            'note2'  => $faker->numberBetween($min = 4, $max = 9),
            'note3'  => $faker->numberBetween($min = 4, $max = 9),
            'moyenne'  => $faker->numberBetween($min = 5, $max = 9),

        ]);
        Evaluation_l2::create([
            'matricule' => '664018374578',
            'etudiant_id' => 2,
            'matiere_id' => 18,
            'nomMatiere' => "Java",
            'annee' => "2020",
            'numSemestre' => 4,
            'nomClasse' => "L2",
            'note1'  => $faker->numberBetween($min = 3, $max = 9),
            'note2'  => $faker->numberBetween($min = 4, $max = 9),
            'note3'  => $faker->numberBetween($min = 4, $max = 9),
            'moyenne'  => $faker->numberBetween($min = 5, $max = 9),

        ]);
        Evaluation_l2::create([
            'matricule' => '664018374578',
            'etudiant_id' => 2,
            'matiere_id' => 19,
            'nomMatiere' => "Genie logiciel",
            'annee' => "2020",
            'numSemestre' => 4,
            'nomClasse' => "L2",
            'note1'  => $faker->numberBetween($min = 3, $max = 9),
            'note2'  => $faker->numberBetween($min = 4, $max = 9),
            'note3'  => $faker->numberBetween($min = 4, $max = 9),
            'moyenne'  => $faker->numberBetween($min = 2, $max = 4),

        ]);
        Evaluation_l2::create([
            'matricule' => '664018374578',
            'etudiant_id' => 2,
            'matiere_id' => 20,
            'nomMatiere' => "Android",
            'annee' => "2020",
            'numSemestre' => 4,
            'nomClasse' => "L2",
            'note1'  => $faker->numberBetween($min = 3, $max = 9),
            'note2'  => $faker->numberBetween($min = 4, $max = 9),
            'note3'  => $faker->numberBetween($min = 4, $max = 9),
            'moyenne'  => $faker->numberBetween($min = 2, $max = 4),

        ]);
    }
}