<?php

use App\Matiere;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class MatiereSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker\Factory::create('fr_FR');
        // Matiere::create([
        //     'nomMat' => 'Algorithme',
        //     'description' => 'text',
        //     'numSemestre' => 1,
        //     'professeur_id'=> 2,
        //     'matricule_professeur'=> '987456321'
        // ]);
        Matiere::create([
            'photo' => 'proj.jpg',
            'nomMat' => 'archi',
            'description' => 'text',
            'numSemestre' => 1,
            'professeur_id'=> 1,
            'matricule_professeur'=> '1'
        ]);
        Matiere::create([
            'photo' => 'proj.jpg',
            'nomMat' => 'Math',
            'description' => 'text',
            'numSemestre' => 1,
            'professeur_id'=> 3,
            'matricule_professeur'=> '2'
        ]);
        Matiere::create([
            'photo' => 'proj.jpg',
            'nomMat' => 'Technique expression',
            'description' => 'text',
            'numSemestre' => 1,
            'professeur_id'=> 4,
            'matricule_professeur'=> '3'
        ]);
        Matiere::create([
            'photo' => 'proj.jpg',
            'nomMat' => 'Info de base',
            'description' => 'text',
            'numSemestre' => 1,
            'professeur_id'=> 5,
            'matricule_professeur'=> '4'
        ]);
        Matiere::create([
            'photo' => 'proj.jpg',
            'nomMat' => 'Probabilité et statistique',
            'description' => 'text',
            'numSemestre' => 2,
            'professeur_id'=> 6,
            'matricule_professeur'=> '5'
        ]);
        Matiere::create([
            'photo' => 'proj.jpg',
            'nomMat' => 'CSI',
            'description' => 'text',
            'numSemestre' => 2,
            'professeur_id'=> 7,
            'matricule_professeur'=> '6'
        ]);
        Matiere::create([
            'photo' => 'proj.jpg',
            'nomMat' => 'Web1',
            'description' => 'text',
            'numSemestre' => 2,
            'professeur_id'=> 8,
            'matricule_professeur'=> '7'
        ]);
        Matiere::create([
            'photo' => 'proj.jpg',
            'nomMat' => 'Architecture des ordi',
            'description' => 'text',
            'numSemestre' => 2,
            'professeur_id'=> 9,
            'matricule_professeur'=> '8'
        ]);
        Matiere::create([
            'photo' => 'proj.jpg',
            'nomMat' => 'STD',
            'description' => 'text',
            'numSemestre' => 2,
            'professeur_id'=> 10,
            'matricule_professeur'=> '9'
        ]);
        
        Matiere::create([
            'nomMat' => 'Anglais',
            'description' => $faker->text(),
            'numSemestre' => 3,
            'professeur_id'=> 6,
            'matricule_professeur'=> '5'
        ]);
        Matiere::create([
            'nomMat' => 'C++',
            'description' => $faker->text(),
            'professeur_id'=> 7,
            'numSemestre' => 3,
            'matricule_professeur'=> '6'
        ]);
        Matiere::create([
            'nomMat' => 'Web2',
            'description' => $faker->text(),
            'numSemestre' => 3,
            'professeur_id'=> 8,
            'matricule_professeur'=> '7'
        ]);
        Matiere::create([
            'nomMat' => 'Linux Avancé',
            'description' => $faker->text(),
            'numSemestre' => 3,
            'professeur_id'=> 9,
            'matricule_professeur'=> '8'
        ]);
        Matiere::create([
            'nomMat' => 'UML',
            'description' => $faker->text(),
            'numSemestre' => 3,
            'professeur_id'=> 10,
            'matricule_professeur'=> '9'
        ]);

        Matiere::create([
            'nomMat' => 'Admin reseau',
            'description' => $faker->text(),
            'numSemestre' => 4,
            'professeur_id'=> 6,
            'matricule_professeur'=> '5'
        ]);
        Matiere::create([
            'nomMat' => 'Laravel',
            'description' => $faker->text(),
            'professeur_id'=> 7,
            'numSemestre' => 4,
            'matricule_professeur'=> '6'
        ]);
        Matiere::create([
            'nomMat' => 'Java',
            'description' => $faker->text(),
            'numSemestre' => 4,
            'professeur_id'=> 8,
            'matricule_professeur'=> '7'
        ]);
        Matiere::create([
            'nomMat' => 'Genie logiciel',
            'description' => $faker->text(),
            'numSemestre' => 4,
            'professeur_id'=> 9,
            'matricule_professeur'=> '8'
        ]);
        Matiere::create([
            'nomMat' => 'Android',
            'description' => $faker->text(),
            'numSemestre' => 4,
            'professeur_id'=> 10,
            'matricule_professeur'=> '9'
        ]);
    }
}
