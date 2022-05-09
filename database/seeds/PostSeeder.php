<?php
use App\Post;
use Illuminate\Database\Seeder;

class PostSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Post::create([
            'title' => 'Semaine Africaine',
            'content' => 'la semaine africaine des sciences est une celebration annuelle d’une semaine de la science de la technologie et de l’innovation, illustrée par divers activités qui s’adressent à divers publics de tous les groupes d’ages',
            'image' => 'a1.jpg'
        ]);
        Post::create([
            'title' => 'Semaine Numerique',
            'content' => 'La Semaine Numérique est un événement participatif et décentralisé, en Wallonie et à Bruxelles, qui défend l’éducation aux médias numériques, l’appropriation d’Internet et des outils digitaux par le grand public.',
            'image' => 'a2.jpg'
        ]);
        Post::create([
            'title' => 'Acceuil des Nouveaux Etudiants',
            'content' => 'Cette année, le Centre Informatique s’adapte et innove en proposant à ses nouveaux étudiants une semaine complète d’accueil, la « SANE » (Semaine d’Accueil des Nouveaux Étudiants), ',
            'image' => 'a3.jpg'
        ]);
        Post::create([
            'title' => 'Forum des Etudiants',
            'content' => 'Le Forum des Etudiants Guinéens à pour mission le developpement de l’emploie et l’insertion profetionnelle des jeunes qui consitituent un enjeu majeur pour les pouvoirs politique',
            'image' => 'a4.jpg'
        ]);
    }
}
