<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/
//Routes pour les visiteurs
Route::get('/', 'VisiteurController@index')->name('acceuil');
Route::get('/cours', 'VisiteurController@prog')->name('cours');
Route::get('/', 'VisiteurController@index')->name('acceuil');
Route::get('/historique', 'VisiteurController@histo')->name('historique');
Route::get('/organigramme', 'VisiteurController@org')->name('organigramme');
Route::get('/admission', 'VisiteurController@adm')->name('admission');
Route::get('/partenaire', 'VisiteurController@parte')->name('partenaire');
Route::get('/gallery', 'VisiteurController@gallery')->name('gallery');
Route::get('/contact', 'VisiteurController@show')->name('contact');
Route::get('/formulaireadmission', 'VisiteurController@form')->name('formulaire');



Auth::routes(['register'=> false]);

Route::get('/home', 'HomeController@index')->name('home');
//Routes professeur
Route::get('/professeur', 'ProfesseurController@matiereProf')->name('professeur.matiereProf');
Route::get('/professeur/espace/{idMatiere}', 'ProfesseurController@espace')->name('professeur.espace');


Route::prefix('/espaceprof')->group(function(){
    Route::get('/listeetudiant/{idProf}/{idMat}', 'EspaceProfesseurController@listeEtudiant')->name('espaceProf.listeEtudiant');
    Route::get('/note/create/{idMatiere}', 'NoteController@create')->name('note.create');
    Route::post('/note/create/{idMatiere}', 'NoteController@store')->name('note.store');
    Route::put('/note/{idMatiere}', 'NoteController@update')->name('note.update');
    Route::get('/note/{idMatiere}', 'NoteController@index')->name('note.index');
});
Route::get('/dashboard', 'DashboardController@index')->name('dashboard');

Route::prefix('/admin')->group(function(){

    Route::get('/administration/ajoutinscription','InscriptionController@create')->name('inscription.create');
    Route::put('/administration/enreginscription','InscriptionController@store')->name('inscription.store');

    Route::get('/administration/listeinscription','InscriptionController@index')->name('inscription.index');
    Route::get('/administration/editioninscription/{inscription_id}','InscriptionController@edit')->name('inscription.edit');
    Route::put('/administration/modifinscription/{inscription_id}','InscriptionController@update')->name('inscription.update');
    Route::Delete('/administration/suppression/{inscription}','InscriptionController@destroy')->name('inscription.destroy');




    Route::get('/ajoutprof','ProfesseurController@create')->name('professeur.create');
    Route::put('/administration/ajoutprof','ProfesseurController@store')->name('professeur.store');

    Route::get('/listeProfs','ProfesseurController@index')->name('professeur.index');
    Route::get('/editionProf/{prof_id}','ProfesseurController@edit')->name('professeur.edit');
    Route::put('/modificationProf/{prof_id}','ProfesseurController@update')->name('professeur.update');
    Route::Delete('/professeur/suppression/{professeur}','ProfesseurController@destroy')->name('professeur.destroy');


    //Routes etudiant
    Route::get('/etudiants', 'EtudiantController@index')->name('etudiant.index');
    Route::get('/etudiant/ajoutEtudiant', 'EtudiantController@create')->name('etudiant.create');
    Route::put('/etudiant/ajoutEtudiant', 'EtudiantController@store')->name('etudiant.store');
    Route::get('/etudiant/editionEtudiant/{etudiant_id}','EtudiantController@edit')->name('etudiant.edit');
    Route::put('/etudiant/modification/{etudiant_id}', 'EtudiantController@update')->name('etudiant.update');
    Route::delete('/etudiant/suppression/{etudiant_id}', 'EtudiantController@destroy')->name('etudiant.destroy');
 
    Route::get('etudiant/listeDesCours', 'EtudiantController@mesCours')->name('mesCours')->middleware('checkEtud'); 
    Route::get('etudiant/anciennesNotes', 'EtudiantController@anciennesNotes')->name('notes.old')->middleware('checkEtud');
    Route::get('etudiant/anciennesNotes', 'EtudiantController@anciennesNotes')->name('notes.old')->middleware('checkEtud');    
    Route::get('etudiant/afficherNotes/{nomMat}', 'EtudiantController@afficherNote')->name('notes')->middleware('checkEtud');  
    Route::get('etudiant/detailCours/{nomMat}', 'EtudiantController@afficherDetailCours')->name('details')->middleware('checkEtud');    
    Route::get('etudiant/afficherDettes/{numSemestre}', 'EtudiantController@afficherDettes')->name('dettes')->middleware('checkEtud');   
    Route::get('etudiant/anciennesNotesAfficher', 'EtudiantController@anciennesNotesAfficher')->name('notes.old.view')->middleware('checkEtud'); 
    


    //Routes programmes
    Route::get('/programmes','ProgrammeController@index')->name('programme.index');
    Route::get('/programme/ajoutProgramme', 'ProgrammeController@create')->name('programme.create');
    Route::put('/programme/ajoutProgramme', 'ProgrammeController@store')->name('programme.store');
    Route::get('/programme/modification/{program_id}', 'ProgrammeController@edit')->name('programme.edit');
    Route::put('/programme/modification/{program_id}', 'ProgrammeController@update')->name('programme.update');
    Route::delete('/programme/suppression/{programme}', 'ProgrammeController@destroy')->name('programme.destroy');

    //Routes posts
    Route::get('/posts', 'PostController@index')->name('post.index');
    Route::get('/post/ajoutArticle', 'PostController@create')->name('post.create');
    Route::put('/post/ajoutArticle', 'PostController@store')->name('post.store');
    Route::get('/post/modification/{post_id}' , 'PostController@edit')->name('post.edit');
    Route::put('/post/modification/{post_id}', 'PostController@update')->name('post.update');
    Route::delete('/post/suppression/{post}', 'PostController@destroy')->name('post.destroy');
    
    //Routes Users
    Route::get('/user/create', 'UsersController@create')->name('user.create')->middleware('checkAdmin');
    Route::post('/user', 'UsersController@store')->name('user.store')->middleware('checkAdmin');
    //Route classes
    Route::get('/classe', 'ClasseController@index')->name('classe.index');
    Route::get('/classe/ajoutClasse', 'ClasseController@create')->name('classe.create');
    Route::put('/classe/ajoutClasse', 'ClasseController@store')->name('classe.store');
    Route::get('/classe/modification/{classe_id}' , 'ClasseController@edit')->name('classe.edit');
    Route::put('/classe/modification/{classe_id}', 'ClasseController@update')->name('classe.update');

    Route::get('/matieres', 'MatiereController@index')->name('matiere.index');
    Route::get('/matiere/ajoutMatiere', 'MatiereController@create')->name('matiere.create');
    Route::put('/matiere/ajoutmMtiere', 'MatiereController@store')->name('matiere.store');
    Route::get('/matiere/modification/{matiere_id}' , 'MatiereController@edit')->name('matiere.edit');
    Route::put('/matiere/modification/{matiere_id}', 'MatiereController@update')->name('matiere.update');
    Route::delete('/matiere/suppression/{matiere}', 'MatiereController@destroy')->name('matiere.destroy');
    
    // Routes Departements
    Route::get('/departement', 'DepartementController@index')->name('departement.index');
    Route::get('/departement/ajoutDepartement', 'DepartementController@create')->name('departement.create');
    Route::put('/departement/ajoutDepartement', 'DepartementController@store')->name('departement.store');
    Route::get('/departement/modification/{departement_id}' , 'DepartementController@edit')->name('departement.edit');
    Route::put('/departement/modification/{departement_id}', 'DepartementController@update')->name('departement.update');
});


//Routes DGAE
Route::get('/emploi', 'DGAEController@index_emploi')->name('emploi.index');
Route::get('/emploi/create', 'DGAEController@create_emploi')->name('emploi.create')->middleware('checkDGAE_Or_Admin');
Route::post('/emploi', 'DGAEController@store_emploi')->name('emploi.store')->middleware('checkDGAE_Or_Admin');
Route::get('/emploi/{emploi}', 'DGAEController@show_emploi')->name('emploi.show');
Route::get('/emploi/edit/{emploi}' , 'DGAEController@edit_emploi')->name('emploi.edit')->middleware('checkDGAE_Or_Admin');
Route::delete('/emploi/{emploi}', 'DGAEController@destroy_emploi')->name('emploi.destroy')->middleware('checkDGAE_Or_Admin');
Route::put('/emploi/{emploi}', 'DGAEController@update_emploi')->name('emploi.update')->middleware('checkDGAE_Or_Admin');

        //chercher les etudiants endettés 
Route::get('/chercherDette', 'DGAEController@chercherDette')->name('chercherDette')->middleware('checkDGAE_Or_Admin');
Route::post('/chercherDette', 'DGAEController@store_chercherDette')->name('store.chercherDette')->middleware('checkDGAE_Or_Admin');
        // les notes des étudiants par matiere et par an
Route::get('/notesMatiere', 'DGAEController@notesMatiere')->name('notesMatiere')->middleware('checkDGAE_Or_Admin');
Route::post('/notesMatiere', 'DGAEController@store_notesMatiere')->name('store.notesMatiere')->middleware('checkDGAE_Or_Admin');
        // les notes d'un étudiant dans un semestre donné
Route::get('/notesEtudiant', 'DGAEController@notesEtudiant')->name('notesEtudiant')->middleware('checkDGAE_Or_Admin');
Route::post('/notesEtudiant', 'DGAEController@store_notesEtudiant')->name('store.notesEtudiant')->middleware('checkDGAE_Or_Admin');
        // Relever de note d'un etudiant en function du niveau
Route::get('/releverNotesEtudiant', 'DGAEController@releverNote')->name('releverNote')->middleware('checkDGAE_Or_Admin');
Route::post('/releverNotesEtudiant', 'DGAEController@store_releverNote')->name('store.releverNote')->middleware('checkDGAE_Or_Admin');
        // Profile user
Route::get('/profile', 'UsersController@profile')->name('profile')->middleware('auth');
Route::post('/profile', 'UsersController@store_profile')->name('store.profile');
