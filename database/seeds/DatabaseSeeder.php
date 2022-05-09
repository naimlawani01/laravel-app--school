<?php

use App\Annee;
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
         $this->call(AnneeSeeder::class);
        $this->call(RoleSeeder::class);
        $this->call(MatiereSeeder::class);
        $this->call(ProfesseurSeeder::class);
        $this->call(SemestreSeeder::class);
        $this->call(InscriptionSeeder::class);
        $this->call(Evaluation_l1Seeder::class);
        $this->call(TestEtudiant1Seeder::class);
        $this->call(TestEtudiant2Seeder::class);
        $this->call(EtudiantSeeder::class);
        $this->call(ClasseSeeder::class);
        $this->call(ProgrammeSeeder::class);
         //$this->call(UserSeeder::class); Geré dans RolesSeeder
    }
}
