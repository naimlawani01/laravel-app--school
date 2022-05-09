<?php

namespace App\Http\Controllers;

use App\Departement;
use App\Matiere;
use App\Etudiant;
use App\Inscription;
use App\Post;
use App\Professeur;
use App\Programme;
use App\Evaluation_l1;
use App\Evaluation_l2;
use App\Evaluation_l3;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\EtudiantController;
use App\Semestre;

class DashboardController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function index()
    {
        if(Auth::user()->role_id==1){
            
            $counts['etudiantCount'] = Etudiant::count();
            $counts['professeurCount'] = Professeur::count();
            $counts['programmeCount'] = Programme::count();
            $counts['matiereCount'] = Matiere::count();
            $counts['inscriptionCount'] = Inscription::count();
            $counts['postCount'] = Post::count();
            $counts['departementCount'] = Departement::count();
            $counts['matiereCount'] = Matiere::count();
            $counts['semestreCount'] = Semestre::count();
            $counts['articleCount'] = Post::count();

            $etudiants= Etudiant::all();
            foreach($etudiants as $etudiant){
                $nationality[] = $etudiant->nationalite;
            }
            $nationality = array_unique($nationality);
            foreach($nationality as $nationaliti){
                $etudiantsPerNationality[] = Etudiant::where('nationalite',$nationaliti)->count();
                $nationalities[] = $nationaliti;
            }
            $nationalities = json_encode($nationalities);
          
            return view('admin.dashboard.admin',compact('counts','etudiantsPerNationality','nationalities'));
        }
        elseif(Auth::user()->role_id==2){
          
            $annee = date('Y');

            $endettes_l1M1 = DB::select("SELECT DISTINCT et.matricule, et.nom, et.prenom, e.note1, e.note2, e.note3, e.moyenne, m.nomMat, e.numSemestre, e.annee
            from etudiants et , evaluation_l1s e, inscriptions i, matieres m, semestres s, annees a
            where et.matricule = i.matricule
            and et.matricule = e.matricule
            and s.numSemestre = e.numSemestre
            and  m.nomMat = e.nomMatiere
            AND e.annee = $annee
            and e.moyenne < 5
            and e.numSemestre = (SELECT  max(numSemestre) - 1
				from inscriptions i, classes c
				where c.nomClasse = 'L1'
                and i.nomClasse = c.nomClasse)");

            $endettes_l1M2 = DB::select("SELECT DISTINCT et.matricule, et.nom, et.prenom, e.note1, e.note2, e.note3, e.moyenne, m.nomMat, e.numSemestre, e.annee
            from etudiants et , evaluation_l1s e, inscriptions i, matieres m, semestres s, annees a
            where et.matricule = i.matricule
            and et.matricule = e.matricule
            and s.numSemestre = e.numSemestre
            AND m.numSemestre = e.numSemestre
            and  m.nomMat = e.nomMatiere
            AND e.annee = $annee
            and e.moyenne < 5
            and e.numSemestre = (SELECT  max(numSemestre) 
				from inscriptions i, classes c
				where c.nomClasse = 'L1'
                and i.nomClasse = c.nomClasse)");

            $endettes_l1 = count($endettes_l1M1) + count($endettes_l1M2);

            $endettes_l2 = DB::select("SELECT DISTINCT et.matricule, et.nom, et.prenom, e.note1, e.note2, e.note3, e.moyenne, m.nomMat, e.numSemestre, e.annee
            from etudiants et , evaluation_l2s e, inscriptions i, matieres m, semestres s, annees a
            where et.matricule = i.matricule
            and et.matricule = e.matricule
            and s.numSemestre = e.numSemestre
            and  m.nomMat = e.nomMatiere
            and i.numSemestre = e.numSemestre
            AND e.annee = $annee
            and e.moyenne < 5
            and e.numSemestre = (SELECT  max(numSemestre) OR max(numSemestre) -1
				from inscriptions i, classes c
				where c.nomClasse = 'L2'
				and i.nomClasse = c.nomClasse)");

            $endettes_l3 = DB::select("SELECT DISTINCT et.matricule, et.nom, et.prenom, e.note1, e.note2, e.note3, e.moyenne, m.nomMat, e.numSemestre, e.annee
            from etudiants et , evaluation_l3s e, inscriptions i, matieres m, semestres s, annees a
            where et.matricule = i.matricule
            and et.matricule = e.matricule
            and s.numSemestre = e.numSemestre
            and  m.nomMat = e.nomMatiere
            and i.numSemestre = e.numSemestre
            AND e.annee = $annee
            and e.moyenne < 5
            and e.numSemestre = (SELECT  max(numSemestre) OR max(numSemestre) -1
				from inscriptions i, classes c
				where c.nomClasse = 'L3'
				and i.nomClasse = c.nomClasse)");

            return view('admin.dashboard.DGAE',compact('endettes_l1','endettes_l2','endettes_l3'));
        }


        elseif(Auth::user()->role_id==3){
            
            $professeur= Professeur::select('id')->where('email', Auth::user()->email)->first();
            $matieres= DB::select('Select *
            from  matieres
            where  professeur_id=?', [$professeur->id]);
            //dd($matieres);
            
            foreach ($matieres as $matiere) {


                //++++++++++++++++++++++++++++++++++++++++
                $semestreL1= array(1, 2);
                $semestreL2= array(3, 4);
                $semestreL3= array(5, 6);
                $semestre= Matiere::select('numSemestre')->where('id', $matiere->id)->first();
                if(in_array($semestre->numSemestre, $semestreL1)){
                    //Nombre d'étudiant dont les notes sont supérieur à 5
                    $nombre1= $evaluation= Evaluation_l1::where('matiere_id', $matiere->id)->where('note1', '>=', 5)->count();
                    $nombre2= $evaluation= Evaluation_l1::where('matiere_id', $matiere->id)->where('note2', '>=', 5)->count();
                    $nombre3= $evaluation= Evaluation_l1::where('matiere_id', $matiere->id)->where('note3', '>=', 5)->count();
                    $tabNombre[$matiere->nomMat]= array($nombre1, $nombre2, $nombre3);
                }
                if(in_array($semestre->numSemestre, $semestreL2)){
                    //Nombre d'étudiant dont les notes sont supérieur à 5
                    $nombre1= $evaluation= Evaluation_l2::where('matiere_id', $matiere->id)->where('note1', '>=', 5)->count();
                    $nombre2= $evaluation= Evaluation_l2::where('matiere_id', $matiere->id)->where('note2', '>=', 5)->count();
                    $nombre3= $evaluation= Evaluation_l2::where('matiere_id', $matiere->id)->where('note3', '>=', 5)->count();
                    $tabNombre[$matiere->nomMat]= array($nombre1, $nombre2, $nombre3);
                }
                if(in_array($semestre->numSemestre, $semestreL3)){
                    //Nombre d'étudiant dont les notes sont supérieur à 5
                    $nombre1= $evaluation= Evaluation_l3::where('matiere_id', $matiere->id)->where('note1', '>=', 5)->count();
                    $nombre2= $evaluation= Evaluation_l3::where('matiere_id', $matiere->id)->where('note2', '>=', 5)->count();
                    $nombre3= $evaluation= Evaluation_l3::where('matiere_id', $matiere->id)->where('note3', '>=', 5)->count();
                    $tabNombre[$matiere->nomMat]= array($nombre1, $nombre2, $nombre3);
                }
                //++++++++++++++++++++++++++++++++++++++++      
            }
            return view('admin.dashboard.professeur', compact('matieres', 'professeur', 'tabNombre'));
        }


        
        elseif(Auth::user()->role_id==4){
            $matricule_etudiant = Auth::user()->etudiant->matricule;
            $matieres_notees = (new EtudiantController)-> matieresEvaluees($matricule_etudiant);
            $notes_etudiant  = (new EtudiantController)->notesEvaluations("all", $matricule_etudiant);
            $liste_sessions = (new EtudiantController)->listeSessions($matricule_etudiant);
           // $liste_dettes = (new EtudiantController)->listeDettes($matricule_etudiant);
            $liste_dettes = (new EtudiantController)->listeDettesParSemestre($matricule_etudiant);
            return view('admin.dashboard.etudiant', compact('matieres_notees', 'notes_etudiant', 'liste_sessions', 'liste_dettes'));
        }
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
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
    public function update(Request $request, $id)
    {
        //
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
