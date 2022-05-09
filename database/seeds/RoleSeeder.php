<?php

use App\User;
use App\Models\Role;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class RoleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Role::create([
            'name' => 'Administrateur'
        ]);
        Role::create([
            'name' => 'DGAE'
        ]);
        Role::create([
            'name' => 'Professeur'
        ]);
        Role::create([
            'name' => 'Etudiant'
        ]);

        User::create([
            'name' =>'admin',
            'email' =>'admin@gmail.com',
            'password' =>Hash::make('12345678'),
            'role_id' =>1,
        ]);

        User::create([
            'name' =>'DGAE',
            'email' =>'DGAE@gmail.com',
            'password' =>Hash::make('12345678'),
            'role_id' =>2,
        ]);
        User::create([
            'name' =>'prof',
            'email' =>'prof@gmail.com',
            'password' =>Hash::make('12345678'),
            'role_id' =>3,
        ]);
        User::create([
            'name' =>'etudiant',
            'email' =>'etud@gmail.com',
            'password' =>Hash::make('12345678'),
            'role_id' =>4,
            'etudiant_id' =>1,
        ]);
    }
}
