<?php

namespace App\Http\Controllers;

use App\Annee;
use App\Matiere;
use App\Etudiant;
use App\Evaluation;
use App\Professeur;
use App\Inscription;
use App\Evaluation_l1;
use App\Evaluation_l2;
use App\Evaluation_l3;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;

class NoteController extends Controller
{

    public function __construct()
    {
        $this->middleware('checkProf');
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index($idMatiere)
    {
        $professeur= Professeur::select('id')->where('email', Auth::user()->email)->first();
        $matieres= DB::select('Select *
            from  matieres
            where  professeur_id=?', [$professeur->id]);
        $matiere = Matiere::find($idMatiere);
        $annee= Annee::select('annee')->latest('id')->first();
        $semestre= Matiere::select('numSemestre')->where('id', $idMatiere)->first();
        $semestreL1= array(1, 2);
        $semestreL2= array(3, 4);
        $semestreL3= array(5, 6);
        if(in_array($semestre->numSemestre, $semestreL1)){
            $evaluation= Evaluation_l1::all()->where('matiere_id', $idMatiere)->where('annee', $annee->annee);
            return view('professeur.notes.index', compact('matieres', 'professeur','evaluation', 'matiere'));

        }
        if(in_array($semestre->numSemestre, $semestreL2)){
            $evaluation= Evaluation_l2::all()->where('matiere_id', $idMatiere)->where('annee', $annee->annee);
            return view('professeur.notes.index', compact('matieres', 'professeur','evaluation', 'matiere'));
        }
        if(in_array($semestre->numSemestre, $semestreL3)){
            $evaluation= Evaluation_l3::all()->where('matiere_id', $idMatiere)->where('annee', $annee->annee);
            return view('professeur.notes.index', compact('matieres', 'professeur','evaluation', 'matiere'));
        }
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create($idMatiere)
    {
        $professeur= Professeur::select('id')->where('email', Auth::user()->email)->first();
        $matieres= DB::select('Select *
            from  matieres
            where  professeur_id=?', [$professeur->id]);

        $matiere = Matiere::find($idMatiere);

        $annee= Annee::select('annee')->latest('id')->first();
        //dd($annee);
        $etudiants= Inscription::all()->where('numSemestre',$matiere->numSemestre)->where('annee', $annee->annee);

        $semestre= Matiere::select('numSemestre')->where('id', $idMatiere)->first();
        $semestreL1= array(1, 2);
        $semestreL2= array(3, 4);
        $semestreL3= array(5, 6);
        if(in_array($semestre->numSemestre, $semestreL1)){
            $evaluationL1Row= Evaluation_l1::all()->where('matiere_id', $idMatiere)->where('annee', $annee->annee)->count();
            if($evaluationL1Row==0){
                return view('professeur.notes.create', compact('matieres', 'professeur','etudiants', 'matiere'));
            }else{
                $evaluationL1= Evaluation_l1::all()->where('matiere_id', $idMatiere)->where('annee', $annee->annee);
                //dd($evaluationL1);
                return view('professeur.notes.edit', compact('evaluationL1', 'matieres', 'professeur', 'matiere'));
            }

        }
        if(in_array($semestre->numSemestre, $semestreL2)){
            $evaluationL2Row= Evaluation_l2::all()->where('matiere_id', $idMatiere)->where('annee', $annee->annee)->count();
            if($evaluationL2Row==0){
                return view('professeur.notes.create', compact('matieres', 'professeur','etudiants', 'matiere'));
            }else{
                $evaluationL1= Evaluation_l2::all()->where('matiere_id', $idMatiere)->where('annee', $annee->annee);
                return view('professeur.notes.edit', compact('evaluationL1', 'matieres', 'professeur', 'matiere'));
            }
        }
        if(in_array($semestre->numSemestre, $semestreL3)){
            $evaluationL1Row= Evaluation_l3::all()->where('matiere_id', $idMatiere)->where('annee', $annee->annee)->count();
            if($evaluationL1Row==0){
                return view('professeur.notes.create', compact('matieres', 'professeur','etudiants', 'matiere'));
            }else {
                $evaluationL1= Evaluation_l3::all()->where('matiere_id', $idMatiere)->where('annee', $annee->annee);
                return view('professeur.notes.edit', compact('evaluationL1', 'matieres', 'professeur', 'matiere'));
            }
        }
       
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request, $idMatiere)
    {
        $semestre= Matiere::select('numSemestre')->where('id', $idMatiere)->first();
        $matiere = Matiere::find($idMatiere);
        $semestreL1= array(1, 2);
        $semestreL2= array(3, 4);
        $semestreL3= array(5, 6);
        if(in_array($semestre->numSemestre, $semestreL1)){
            foreach($request->note1 as  $item=>$v){
                $evaluationL1= new Evaluation_l1();
                $inscription= Inscription::select('annee', 'matricule')->where('etudiant_id', $request->etudiant_id)->first();
                //dd($inscription);
                $evaluationL1->etudiant_id = $request->etudiant_id[$item];
                $evaluationL1->matricule = $inscription->matricule;
                $evaluationL1->matiere_id = $matiere->id;
                $evaluationL1->nomMatiere = $matiere->nomMat;
                $evaluationL1->annee = $inscription->annee;
                $evaluationL1->numSemestre = $semestre->numSemestre;
                $evaluationL1->nomClasse = 'L1';
                $evaluationL1->note1 = $request->note1[$item];
                $evaluationL1->note2 = $request->note2[$item];
                $evaluationL1->note3 = $request->note3[$item];
                $moyenne= ($request->note1[$item])*0.3 + ($request->note2[$item])*0.3 + ($request->note3[$item])*0.4;
                $evaluationL1->moyenne = $moyenne;
                $evaluationL1->save();
            }
        }
        if(in_array($semestre->numSemestre, $semestreL2)){
            foreach($request->note1 as  $item=>$v){

                $evaluationL2= new Evaluation_l2();
                $inscription= Inscription::select('annee', 'matricule')->where('etudiant_id', $request->etudiant_id)->first();
                $evaluationL2->etudiant_id = $request->etudiant_id[$item];
                $evaluationL2->matricule = $inscription->matricule;
                $evaluationL2->matiere_id = $matiere->id;
                $evaluationL2->nomMatiere = $matiere->nomMat;
                $evaluationL2->annee = $inscription->annee;
                $evaluationL2->numSemestre = $semestre->numSemestre;
                $evaluationL2->nomClasse = 'L1';
                $evaluationL2->note1 = $request->note1[$item];
                $evaluationL2->note2 = $request->note2[$item];
                $evaluationL2->note3 = $request->note3[$item];
                $moyenne= ($request->note1[$item])*0.3 + ($request->note2[$item])*0.3 + ($request->note3[$item])*0.4;
                $evaluationL2->moyenne = $moyenne;
                $evaluationL2->save();
            }
        }
        if(in_array($semestre->numSemestre, $semestreL3)){
            foreach($request->note1 as  $item=>$v){

                $evaluationL3= new Evaluation_l3();
                $annee= Inscription::select('annee', 'matricule')->where('etudiant_id', $request->etudiant_id)->first();
                $evaluationL3->etudiant_id = $request->etudiant_id[$item];
                $evaluationL3->matricule = $inscription->matricule;
                $evaluationL3->matiere_id = $matiere->id;
                $evaluationL3->nomMatiere = $matiere->nomMat;
                $evaluationL3->annee = $annee->annee;
                $evaluationL3->numSemestre = $semestre->numSemestre;
                $evaluationL3->nomClasse = 'L1';
                $evaluationL3->note1 = $request->note1[$item];
                $evaluationL3->note2 = $request->note2[$item];
                $evaluationL3->note3 = $request->note3[$item];
                $moyenne= ($request->note1[$item])*0.3 + ($request->note2[$item])*0.3 + ($request->note3[$item])*0.4;
                $evaluationL3->moyenne = $moyenne;
                $evaluationL3->save();
            }
        }
        return back();
         
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request,$idMatiere)
    {

        $semestre= Matiere::select('numSemestre')->where('id', $idMatiere)->first();
        $matiere = Matiere::find($idMatiere);
        $semestreL1= array(1, 2);
        $semestreL2= array(3, 4);
        $semestreL3= array(5, 6);
        if(in_array($semestre->numSemestre, $semestreL1)){
            foreach($request->note1 as  $item=>$v){
                $moyenne= ($request->note1[$item])*0.3 + ($request->note2[$item])*0.3 + ($request->note3[$item])*0.4;
                Evaluation_l1::whereId($request->id[$item])->update([
                    'note1'=> $request->note1[$item],
                    'note2'=> $request->note2[$item],
                    'note3'=> $request->note3[$item],
                    'moyenne'=> $moyenne
                ]);
            }
        }
        if(in_array($semestre->numSemestre, $semestreL2)){
            foreach($request->note1 as  $item=>$v){

                $moyenne= ($request->note1[$item])*0.3 + ($request->note2[$item])*0.3 + ($request->note3[$item])*0.4;
                Evaluation_l2::whereId($request->id[$item])->update([
                    'note1'=> $request->note1[$item],
                    'note2'=> $request->note2[$item],
                    'note3'=> $request->note3[$item],
                    'moyenne'=> $moyenne
                ]);
            }
        }
        if(in_array($semestre->numSemestre, $semestreL3)){
            foreach($request->note1 as  $item=>$v){

                $moyenne= ($request->note1[$item])*0.3 + ($request->note2[$item])*0.3 + ($request->note3[$item])*0.4;
                Evaluation_l1::whereId($request->id[$item])->update([
                    'note1'=> $request->note1[$item],
                    'note2'=> $request->note2[$item],
                    'note3'=> $request->note3[$item],
                    'moyenne'=> $moyenne
                ]);
            }
        }
        return back(); 
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
