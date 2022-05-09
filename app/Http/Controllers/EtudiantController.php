<?php

namespace App\Http\Controllers;

use App\User;
use App\Emploi;
use App\Matiere;
use App\Etudiant;
use App\Evaluation;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class EtudiantController extends Controller
{


    public function __construct()
    {
        // $this->middleware('checkAdmin');
        //$this->middleware('checkDGAE');
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $etudiants = Etudiant::paginate(5);
        return view('admin.etudiant.index', compact('etudiants'));
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.etudiant.addEtudiant');
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
        $data = $request->validate([
            'matricule' => 'required|max:14',
            'nom' => 'required',
            'prenom' => 'required',
            'email' => 'required|email',
            'dateNaiss'=> 'required|date',
            'lieuNaiss' => 'required',
            'sexe' => 'required',
            'filiation' => 'required',
            'nationalite' => 'required',
            'cohorte' => 'required'
        ]);

        $etudiant = new Etudiant();
        $etudiant->matricule = $request->matricule;
        $etudiant->nom = $request->nom;
        $etudiant->prenom = $request->prenom;
        $etudiant->email = $request->email;
        $etudiant->dateNaiss = $request->dateNaiss;
        $etudiant->lieuNaiss = $request->lieuNaiss;
        $etudiant->sexe = $request->sexe;
        $etudiant->filiation = $request->filiation;
        $etudiant->nationalite = $request->nationalite;
        $etudiant->cohorte = $request->cohorte;
        $etudiant->photo = request('image')->store('/', 'public');
        $etudiant->save();
        
        $user_etud = new User();
        $user_etud->name = $request->nom.' '.$request->prenom;
        $user_etud->email = $request->email;
        $user_etud->password = Hash::make('123456');
        $user_etud->role_id = 4;
        $user_etud->etudiant_id =  $etudiant->id;
        $user_etud->save();


        $value = "Enregistrement éffectué avec succès...!";
        $request->session()->flash('success', $value);
        return redirect()->route('etudiant.index');
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
        $etudiant = Etudiant::find($id);
        return view('admin.etudiant.editEtudiant', compact('etudiant'));
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
        $data = $request->validate([
            'matricule' => 'required|max:14',
            'nom' => 'required',
            'prenom' => 'required',
            'email' => 'required|email',
            'dateNaiss'=> 'required|date',
            'lieuNaiss' => 'required',
            'sexe' => 'required',
            'filiation' => 'required',
            'nationalite' => 'required',
            'cohorte' => 'required'
        ]);
        Etudiant::whereId($id)->update($data);   
        return redirect()->route('etudiant.index');  
        //
    }

    /**
     * fonctions concernant les traitements de notes et matieres pour l'etudiant
     * 
     */
    public function matieresSuivies($matricule_etudiant){
        $matieres= DB::select('select m.nomMat, m.description, m.numSemestre, p.nom, p.prenom, p.email, p.telephone
        from etudiants et, inscriptions i, semestres s, matieres m, professeurs p
        where et.matricule = i.matricule
        and et.matricule = ' . $matricule_etudiant .
        ' and m.matricule_professeur=p.matricule
        and i.numSemestre = s.numSemestre
        and s.numSemestre = m.numSemestre
        and i.numSemestre = '. $this->semestreEnCours($matricule_etudiant)); 
        return $matieres;
        //matieres actuellement suivies par l'etudiant
    }

    public function matieresEvaluees($matricule_etudiant){ 
        $semestre = $this->semestreEnCours($matricule_etudiant); 
        $table_eva = $this->choixDeTable($matricule_etudiant);
        $matieres_notees= DB::select('select e.nomMatiere
        from etudiants et, inscriptions i, semestres s, matieres m, professeurs p,'.$table_eva.'e
        where et.matricule = i.matricule
        and et.matricule = ' . $matricule_etudiant .
        '  and et.matricule=e.matricule
        and m.matricule_professeur=p.matricule
        and i.numSemestre = s.numSemestre
        and s.numSemestre = m.numSemestre
        and m.numSemestre = e.numSemestre
        and e.nomMatiere = m.nomMat
        and i.numSemestre = '. $this->semestreEnCours($matricule_etudiant));
        return $matieres_notees;
        //matieres où letudiant a eté evalué
    }

    public function notesEvaluations($nomMat, $matricule_etudiant){                 
        $table_eva = $this->choixDeTable($matricule_etudiant) ;
        $req="";
        if($nomMat=="all"){ $req=""; }
        elseif($nomMat=="sessions"){ $req=' and e.moyenne < 5 '; }
        else {$req = ' and e.nomMatiere= "'.$nomMat.'" ';}   
        $notes_etudiant = DB::select('select et.matricule, et.nom, et.prenom,   e.nomMatiere,   e.note1, e.note2, e.note3, e.numSemestre, e.moyenne
        from etudiants et, matieres m,'.$table_eva.'e, inscriptions i,  classes c, semestres s, annees a
        where et.matricule=i.matricule  
        and et.matricule=e.matricule
        and et.matricule = '.  $matricule_etudiant .
        ' and m.nomMat=e.nomMatiere
        '.$req.'     
        and c.nomClasse=e.nomClasse    
        and i.annee = a.annee            
        and a.annee = e.annee 
        and i.numSemestre = s.numSemestre
        and s.numSemestre=e.numSemestre
        and m.numSemestre=e.numSemestre
        and e.numSemestre = '. $this->semestreEnCours($matricule_etudiant));
        return $notes_etudiant;
        //les notes de l'etudiant dans une ou plusieurs matieres suivant la requete
        //la variable $req definit le type de notes en fonction du parametre $nomMat(pour une matieres precise, les sessions ou toutes les notes)         
    }

    public function listeSessions($matricule_etudiant){                
        $table_eva = $this->choixDeTable($matricule_etudiant) ; 
        $listes_sessions = DB::select('select et.matricule, et.nom, et.prenom,   e.nomMatiere,   e.note1, e.note2, e.note3, e.numSemestre, e.moyenne
        from etudiants et, matieres m,'.$table_eva.'e, inscriptions i,  classes c, semestres s, annees a
        where et.matricule=i.matricule  
        and et.matricule=e.matricule
        and et.matricule = '.  $matricule_etudiant .
        ' and m.nomMat=e.nomMatiere 
        and e.moyenne < 5     
        and c.nomClasse=e.nomClasse    
        and i.annee = a.annee            
        and a.annee = e.annee 
        and i.numSemestre = s.numSemestre
        and s.numSemestre=e.numSemestre
        and m.numSemestre=e.numSemestre
        and e.numSemestre = '. $this->semestreEnCours($matricule_etudiant));
        return $listes_sessions;
        //les notes de l'etudiant où il est en session
    }

    public function listeDettes($matricule_etudiant, $semestre){
        $table_eva = $this->choixDeTablesDettes($semestre);
        $listes_dettes = DB::select('select et.matricule, et.nom, et.prenom,   e.nomMatiere,   e.note1, e.note2, e.note3, e.numSemestre, e.moyenne
        from etudiants et, matieres m,'.$table_eva.'e, inscriptions i,  classes c, semestres s, annees a
        where et.matricule=i.matricule  
        and et.matricule=e.matricule
        and et.matricule = '.  $matricule_etudiant .
        ' and m.nomMat=e.nomMatiere 
        and e.moyenne < 5     
        and c.nomClasse=e.nomClasse    
        and i.annee = a.annee            
        and a.annee = e.annee 
        and i.numSemestre = s.numSemestre
        and s.numSemestre=e.numSemestre
        and m.numSemestre=e.numSemestre
        and e.numSemestre = '. $semestre);
        return $listes_dettes;
        //les notes de l'etudiant où il est en dette pour le nombre du sidebar
        //toutes les dettes de l'etudiant
    }

    public function listeDettesParSemestre($matricule_etudiant){
        $semestre = $this->semestreEnCours($matricule_etudiant); 
        $dettes_s1 = []; $dettes_s2 = []; $dettes_s3 = []; 
        $dettes_s4 = []; $dettes_s5 = []; $dettes_s6 = []; 
        if($semestre > 1) {
            $dettes_s1 = $this->listeDettes($matricule_etudiant, 1); //les dettes du semestre 1 si on a depassé ce semestre
        }
        if($semestre > 2) {
            $dettes_s2 = $this->listeDettes($matricule_etudiant, 2);
        }
        if($semestre > 3) {
            $dettes_s3 = $this->listeDettes($matricule_etudiant, 3);
        }
        if($semestre > 4) {
            $dettes_s4 = $this->listeDettes($matricule_etudiant, 4);
        }
        if($semestre > 5) { //pour le dernier semestre, les sessions sont aussi des dettes directement
            $dettes_s5 = $this->listeDettes($matricule_etudiant, 5);
            $dettes_s6 = $this->listeDettes($matricule_etudiant, 6);
        }

        $dettes = ['semestre1' => 0, 'semestre2'=> 0, 'semestre3'=> 0, 'semestre4'=> 0, 'semestre5'=> 0, 'semestre6'=> 0];
        $dettes['semestre1'] =$dettes_s1; 
        $dettes['semestre2'] =$dettes_s2; 
        $dettes['semestre3'] =$dettes_s3; 
        $dettes['semestre4'] =$dettes_s4; 
        $dettes['semestre5'] =$dettes_s5; 
        $dettes['semestre6'] =$dettes_s6; 
        return $dettes;
        //Le nombre de dettes par semestre
    }

    public function semestreEnCours($matricule_etudiant){
        $semestre = DB::select('select max(numSemestre) as semestre
        from inscriptions i
        where i.matricule = '. $matricule_etudiant);
        return $semestre[0]->semestre;
    }
    public function choixDeTable($matricule_etudiant){
        $semestre = $this->semestreEnCours($matricule_etudiant);
        $table_eva =""; 
        if($semestre <= 2){ $table_eva = " evaluation_l1s "; }
        elseif ($semestre <= 4) { $table_eva = " evaluation_l2s ";  }
        elseif ($semestre <= 6) { $table_eva = " evaluation_l3s ";  }
        return $table_eva;
         //choix de la table d'evaluation à consulter en fonction du semestre
    }
    public function choixDeTablesDettes($semestre){
        $table_eva =""; 
        if($semestre <= 2){ $table_eva = " evaluation_l1s "; }
        elseif ($semestre <= 4) { $table_eva = " evaluation_l2s ";  }
        elseif ($semestre <= 6) { $table_eva = " evaluation_l3s ";  }
        return $table_eva;
         //choix de la table d'evaluation à consulter en fonction du semestre
    }
    public function afficherNote($nomMat){   
        $matricule_etudiant = Auth::user()->etudiant->matricule; 
        $matieres_notees = $this->matieresEvaluees($matricule_etudiant); 
        $notes_etudiant = $this->notesEvaluations($nomMat, $matricule_etudiant);
        $liste_sessions = $this->listeSessions($matricule_etudiant);
        $liste_dettes = $this->listeDettesParSemestre($matricule_etudiant);
        return view('etudiant.afficheNotes', compact('matieres_notees', 'notes_etudiant', 'liste_sessions', 'liste_dettes','nomMat'));                  
    }
    public function mesCours(){
        $matricule_etudiant = Auth::user()->etudiant->matricule; 
        $matieres_suivies = $this->matieresSuivies($matricule_etudiant);
        $matieres_notees = $this->matieresEvaluees($matricule_etudiant); 
        $liste_sessions = $this->listeSessions($matricule_etudiant);
        $liste_dettes = $this->listeDettesParSemestre($matricule_etudiant);
        return view('etudiant.mesCours', compact('matieres_suivies', 'matieres_notees', 'liste_sessions', 'liste_dettes'));
    }

    public function afficherDetailCours($nomMat){
        $matricule_etudiant = Auth::user()->etudiant->matricule; 
        $matieres_suivies = $this->matieresSuivies($matricule_etudiant);
        $detailCours;
        foreach ($matieres_suivies as $matiere) {
            if($matiere->nomMat == $nomMat){
                $detailCours = $matiere;
            }
        }
        $matieres_notees = $this->matieresEvaluees($matricule_etudiant); 
        $liste_sessions = $this->listeSessions($matricule_etudiant);
        $liste_dettes = $this->listeDettesParSemestre($matricule_etudiant);
        return view('etudiant.detailCours', compact('matieres_notees', 'liste_sessions', 'liste_dettes', 'detailCours','matieres_suivies'));
    }

    public function afficherDettes($numSemestre){
        $matricule_etudiant = Auth::user()->etudiant->matricule; 
        $dettes = $this->listeDettesParSemestre($matricule_etudiant); //toutes les dettes
        
        $semestreDette;
        if($numSemestre == 1) { $semestreDette = $dettes['semestre1'];}
        elseif($numSemestre == 2) { $semestreDette = $dettes['semestre2'];}
        elseif($numSemestre == 3) { $semestreDette = $dettes['semestre3'];}
        elseif($numSemestre == 4) { $semestreDette = $dettes['semestre4'];}
        elseif($numSemestre == 5) { $semestreDette = $dettes['semestre5'];}
        elseif($numSemestre == 6) { $semestreDette = $dettes['semestre6'];}
        elseif($numSemestre == 0) { $semestreDette = $dettes;} 
  
        $semestreActuelle = $this->semestreEnCours($matricule_etudiant);
        $matieres_notees = $this->matieresEvaluees($matricule_etudiant); 
        $liste_sessions = $this->listeSessions($matricule_etudiant);
        $liste_dettes = $this->listeDettesParSemestre($matricule_etudiant);
        return view('etudiant.afficherDettes', compact('matieres_notees', 'liste_sessions', 'liste_dettes', 'semestreDette', 'semestreActuelle'));
    }

    public function anciennesNotes(){
        $matricule_etudiant = Auth::user()->etudiant->matricule; 
        $semestre = $this->semestreEnCours($matricule_etudiant);
        $matieres_notees = $this->matieresEvaluees($matricule_etudiant); 
        $liste_sessions = $this->listeSessions($matricule_etudiant);
        $liste_dettes = $this->listeDettesParSemestre($matricule_etudiant);
        return view('etudiant.anciennesNotes',compact('matricule_etudiant','semestre','matieres_notees', 'liste_sessions', 'liste_dettes'));
    }
    public function anciennesNotesAfficher(Request $request){
        $nomMat="old"; //pour utiliser la meme vue etudiant.afficheNotes qui en demande
        $matricule_etudiant = Auth::user()->etudiant->matricule; 
        $semestre=$request->semestre;
        $semestreActuel=$this->semestreEnCours($matricule_etudiant);
        $matieres_notees = $this->matieresEvaluees($matricule_etudiant); 
        $liste_sessions = $this->listeSessions($matricule_etudiant);
        $liste_dettes = $this->listeDettesParSemestre($matricule_etudiant);

        $table_eva = $this->choixDeTablesDettes($semestre);
        $notes_etudiant = DB::select('select et.matricule, et.nom, et.prenom,   e.nomMatiere,   e.note1, e.note2, e.note3, e.numSemestre, e.moyenne
        from etudiants et, matieres m,'.$table_eva.'e, inscriptions i,  classes c, semestres s, annees a
        where et.matricule=i.matricule  
        and et.matricule=e.matricule
        and et.matricule = '.  $matricule_etudiant .
        ' and m.nomMat=e.nomMatiere    
        and c.nomClasse=e.nomClasse    
        and i.annee = a.annee            
        and a.annee = e.annee 
        and i.numSemestre = s.numSemestre
        and s.numSemestre=e.numSemestre
        and m.numSemestre=e.numSemestre
        and e.numSemestre = '. $semestre);
        return view('etudiant.afficheNotes', compact('matieres_notees', 'notes_etudiant', 'liste_sessions', 'liste_dettes','nomMat', 'semestreActuel'));                  
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
