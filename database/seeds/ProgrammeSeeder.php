<?php

use App\Programme;
use Illuminate\Database\Seeder;

class ProgrammeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker\Factory::create('fr_FR');
        Programme::create([
            'nomProg' => 'Programmation',
            'nomDept' => 'NTIC',
        ]);
    }
}
