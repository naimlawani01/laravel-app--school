<?php

namespace App\Http\Controllers;

use App\Annee;
use App\Inscription;
use App\Matiere;
use App\Professeur;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;

class EspaceProfesseurController extends Controller
{
    public function __construct()
    {
        $this->middleware('checkProf');
    }
    public function listeEtudiant($idProf, $idMat){
        $professeur= Professeur::select('id')->where('email', Auth::user()->email)->first();
        $matieres= DB::select('Select *
            from  matieres
            where  professeur_id=?', [$professeur->id]);

        $matiere = Matiere::find($idMat);
        $annee= Annee::select('annee')->latest('id')->first();
        //dd($annee);
        $etudiants= Inscription::all()->where('numSemestre',$matiere->numSemestre)->where('annee', $annee->annee);
        
        /* $etudiants= DB::select('select  et.matricule, et.nom, et.prenom, s.numSemestre
        from etudiants et, semestres s, inscriptions i, matieres m, professeurs p
        where et.matricule = i.matricule
        and i.numSemestre = s.numSemestre
        and s.numSemestre = m.numSemestre
        and m.matricule_professeur = p.matricule
        and m.id = ?
        and p.matricule = ? ', [$idMat, $idProf]); */
        return view('professeur.listeEtudiant', compact('etudiants', 'professeur', 'matieres', 'matiere'));
    }
}
