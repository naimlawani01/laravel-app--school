<?php

use App\Semestre;
use Illuminate\Database\Seeder;

class SemestreSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        for($i=1; $i<7; $i++){
            Semestre::create([
                'numSemestre' => $i,
            ]);
        }
    }
}
