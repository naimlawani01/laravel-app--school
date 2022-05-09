<?php

namespace App\Http\Controllers;

use App\Annee;
use App\Classe;
use App\Emploi;
use App\Matiere;
use App\Semestre;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;

class DGAEController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth');
    }


    public function index_emploi()
    {
        $emplois = Emploi::all();

        if (Auth::user()->role_id == 4) 
        {
            $matricule_etudiant = Auth::user()->etudiant->matricule;
            $matieres_notees = (new EtudiantController)-> matieresEvaluees($matricule_etudiant);
            $liste_sessions = (new EtudiantController)->listeSessions($matricule_etudiant);
            $liste_dettes = (new EtudiantController)->listeDettesParSemestre($matricule_etudiant);
        }
        
        return view('DGAE.emploi.indexEmploi',compact('emplois','matieres_notees','liste_sessions','liste_dettes'));
    }


    public function create_emploi()
    {
        $this->authorize('create','App\Emploi');

        return view('DGAE.emploi.createEmploi');
    }

    public function store_emploi(Request $request)
    {
        $this->authorize('create','App\Emploi');
        $request->validate([
            'nomSemestre' => 'required',
            'emploi' => 'required'
        ]);

        $emploi = new Emploi();

        $emploi->nomSemestre = $request->nomSemestre;
        $emploi->emploi = $request->emploi;
        $emploi->save();

        $value = "Emploi du temps enregistrer avec succès...!";
        $request->session()->flash('success', $value);
        return redirect()->route('emploi.show',['emploi'=>$emploi->id]);
    }

    public function show_emploi(Emploi $emploi)
    {
        if (Auth::user()->role_id == 4) 
        {
            $matricule_etudiant = Auth::user()->etudiant->matricule;
            $matieres_notees = (new EtudiantController)-> matieresEvaluees($matricule_etudiant);
            $liste_sessions = (new EtudiantController)->listeSessions($matricule_etudiant);
            $liste_dettes = (new EtudiantController)->listeDettesParSemestre($matricule_etudiant);
        }
        

        return view('DGAE.emploi.showEmploi',compact('emploi','matieres_notees','liste_sessions','liste_dettes'));
    }

    public function edit_emploi(Emploi $emploi)
    {
        $this->authorize('create','App\Emploi');
        return view('DGAE.emploi.editEmploi',compact('emploi'));
    }

    public function update_emploi(Request $request, Emploi $emploi)
    {
        $this->authorize('create','App\Emploi');
        $data = $request->validate([
            'nomSemestre' => 'required',
            'emploi' => 'required'
        ]);

        $emploi->update($data);

        return redirect()->route('emploi.show',['emploi'=>$emploi->id]);
    }


    public function destroy_emploi(Emploi $emploi)
    {
        $this->authorize('create','App\Emploi');
        
        $emploi->delete();

        return redirect()->route('emploi.index');
    }


    
    public function chercherDette()
    {
        return view('DGAE.dette.etud_dette');
    }

    public function store_chercherDette(Request $request)
    {
       
        $list_etuds = DB::select("SELECT et.matricule, et.nom, et.prenom, e.note1, e.note2, e.note3, e.moyenne, e.nomMatiere, s.numSemestre, a.annee
        from etudiants et , evaluation_l1s e, inscriptions i, matieres m, semestres s, annees a, classes c
        where et.matricule = i.matricule
        and et.matricule = e.matricule
        and  m.nomMat = e.nomMatiere
        and c.nomClasse = '$request->nomClasse'
        and m.nomMat = '$request->nomMat'
        and s.numSemestre = e.numSemestre
        and e.annee = a.annee
        and e.annee = $request->annee
        and e.moyenne <5
        and e.numSemestre = (SELECT  m.numSemestre
                from matieres m
                where m.nomMat = '$request->nomMat')
        ORDER BY et.nom");

        if(empty($list_etuds))
        {
            $value = "Pas d'etudiant endetté en $request->nomMat en $request->annee dans la classe $request->nomClasse";
            Session::flash('danger', $value);
            return back();
        }

        $matiere = $request->nomMat;

        return view('DGAE.dette.liste_dette',compact('list_etuds','matiere'));
    }


    
    public function notesMatiere()
    {
        $matieres = Matiere::all();
        $annees = Annee::all();
        return view('DGAE.notesMatiere.notesMatiere',compact('matieres','annees'));
    }

    public function store_notesMatiere(Request $request)
    {
        $list_etuds = DB::select("SELECT et.matricule, et.nom, et.prenom,   m.nomMat,   e.note1, e.note2, e.note3, e.moyenne, c.nomClasse, s.numSemestre, e.annee
        FROM etudiants et, matieres m, evaluation_l1s e,  inscriptions i,  classes c, semestres s, annees a
        WHERE et.matricule=i.matricule  
        AND et.matricule=e.matricule
        AND m.nomMat=e.nomMatiere
        AND e.annee = a.annee
        AND a.annee = i.annee
        AND e.annee = $request->annee
        AND e.nomMatiere= '$request->nomMat' 
        AND c.nomClasse=e.nomClasse
        AND s.numSemestre = e.numSemestre
        AND s.numSemestre = m.numSemestre
        AND e.numSemestre = (select m.numSemestre
                from matieres m, semestres s
                where s.numSemestre = m.numSemestre
                AND m.nomMat = '$request->nomMat' )
        ORDER BY et.nom");

        if(empty($list_etuds))
        {
            $value = "La matiere $request->nomMat n'a pas de note en $request->annee";
            Session::flash('danger', $value);
            return back();
        }


        $matiere = $request->nomMat;
        $annee = $list_etuds[0]->annee;

        return view('DGAE.notesMatiere.listeNotesMatiere',compact('list_etuds','matiere','annee'));
    }


    public function notesEtudiant()
    {
        $semestres = Semestre::all();
        return view('DGAE.notesEtudiants.notesEtudiant',compact('semestres'));
    }

    public function store_notesEtudiant(Request $request)
    {
        $notesSemestre = DB::select("SELECT DISTINCT et.matricule, et.nom, et.prenom, m.nomMat, e.annee, e.note1, e.note2, e.note3, e.moyenne, c.nomClasse, s.numSemestre 
        FROM etudiants et, matieres m, evaluation_l1s e, inscriptions i, classes c, semestres s, annees a 
        WHERE et.matricule=i.matricule 
        AND et.matricule=e.matricule 
        AND et.matricule = $request->matricule 
        AND m.nomMat=e.nomMatiere 
        AND c.nomClasse=e.nomClasse 
        AND s.numSemestre=e.numSemestre 
        AND s.numSemestre = $request->numSemestre 
        AND a.annee = i.annee 
        AND a.annee = e.annee
        ORDER BY m.nomMat");
        

        if(empty($notesSemestre))
        {
            $value = "L'étudiant avec le matricule $request->matricule n'a pas de note dans le semetre N° $request->numSemestre";
            Session::flash('danger', $value);
            return back();
        }

        $nom_etud = $notesSemestre[0]->nom.' '.$notesSemestre[0]->prenom;
        $semestre = $notesSemestre[0]->numSemestre;

        return view('DGAE.notesEtudiants.listeNotesEtudiant', compact('notesSemestre','nom_etud','semestre'));
        
    }

    public function releverNote()
    {
        $classes = Classe::all();

        return view('DGAE.releverNote.releverNotes',compact('classes'));
    }

    public function store_releverNote(Request $request)
    {
        $module1 = DB::select("SELECT DISTINCT et.matricule, et.nom, et.prenom, m.nomMat, e.annee, e.note1, e.note2, e.note3, e.moyenne, c.nomClasse, e.numSemestre 
        FROM etudiants et, matieres m, evaluation_l1s e, inscriptions i, classes c, semestres s, annees a 
        WHERE et.matricule=i.matricule 
        AND et.matricule=e.matricule 
        AND et.matricule = $request->matricule 
        AND m.nomMat=e.nomMatiere 
        AND c.nomClasse=e.nomClasse 
        AND s.numSemestre=e.numSemestre 
        AND a.annee = i.annee 
        AND a.annee = e.annee 
        AND s.numSemestre = (SELECT  max(numSemestre) - 1 
                from inscriptions i, classes c
                where c.nomClasse = '$request->nomClasse'
                and i.nomClasse = c.nomClasse) 
        ORDER BY m.nomMat");

        // dd($module1);

        $module2 = DB::select("SELECT DISTINCT et.matricule, et.nom, et.prenom, m.nomMat, e.annee, e.note1, e.note2, e.note3, e.moyenne, c.nomClasse, e.numSemestre 
        FROM etudiants et, matieres m, evaluation_l1s e, inscriptions i, classes c, semestres s, annees a 
        WHERE et.matricule=i.matricule 
        AND et.matricule=e.matricule 
        AND et.matricule = $request->matricule 
        AND m.nomMat=e.nomMatiere 
        AND c.nomClasse=e.nomClasse 
        AND s.numSemestre=e.numSemestre 
        AND a.annee = i.annee 
        AND a.annee = e.annee
        AND s.numSemestre = (SELECT  max(numSemestre)  
                from inscriptions i, classes c
                where c.nomClasse = '$request->nomClasse'
                and i.nomClasse = c.nomClasse) 
        ORDER BY m.nomMat");

        // dd($module2);

        $nom_etud = $module1[0]->nom.' '.$module1[0]->prenom ;
        $classe = $module1[0]->nomClasse;

        return view('DGAE.releverNote.listeNotes', compact('module1','module2','nom_etud','classe'));

    }

    
}