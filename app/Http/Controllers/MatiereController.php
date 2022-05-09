<?php

namespace App\Http\Controllers;

use App\Matiere;
use App\Professeur;
use App\Semestre;
use Illuminate\Http\Request;

class MatiereController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $matieres = Matiere::paginate(5);
        foreach($matieres as $matiere){
            $prof = Professeur::where('matricule',$matiere->matricule_professeur)->first();
            $nomProf = "$prof->prenom $prof->nom";
            $matiereWithProf[$nomProf] = $matiere;
        }
        return view('admin.matiere.index',compact('matiereWithProf'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $semestres = Semestre::all();
        $professeurs = Professeur::all();
        return view('admin.matiere.addMatiere', compact('semestres', 'professeurs'));
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
            'nomMat' => 'required',
            'semestre' => 'required',
            'professeur' => 'required',
            'description' => 'required'
        ]);

        $prof_id = Professeur::where('matricule',$request->professeur)->first()->id;
        $matiere = new Matiere();
        $matiere->nomMat = $request->nomMat;
        $matiere->description = $request->description;
        $matiere->numSemestre = $request->semestre;
        $matiere->professeur_id = $prof_id;
        $matiere->matricule_professeur = $request->professeur;
        $matiere->save();
        
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
        $matiere = Matiere::find($id);
        $semestres = Semestre::all();
        $professeurs = Professeur::all();
        return view('admin.matiere.editMatiere', compact('semestres','professeurs','matiere'));
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
            'nomMat' => 'required',
            'numSemestre' => 'required',
            'matricule_professeur' => 'required',
            'description' => 'required'
        ]);
        $prof_id = Professeur::where('matricule',$request->matricule_professeur)->first()->id;
        $data['professeur_id'] = $prof_id;

        Matiere::whereId($id)->update($data);
        return redirect()->route('matiere.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Matiere::whereId($id)->delete();
        return redirect()->route('matiere.index');
    }
}
