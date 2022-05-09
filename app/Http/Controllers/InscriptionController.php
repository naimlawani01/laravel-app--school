<?php

namespace App\Http\Controllers;

use App\Etudiant;
use Illuminate\Http\Request;
use App\Inscription;
use Illuminate\Support\Facades\Hash;


class InscriptionController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $inscription = Inscription::paginate(5);
        
        return view('admin.inscription.index',compact('inscription'));
    }
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.inscription.addInscription');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $etudiant_id = Etudiant::where('matricule',$request->matricule)->first()->id;
        
        $data = $request->validate([
            'matricule'=>'required',
            'annee' =>'required',
            'nomClasse'=>'required',
            'numSemestre'=>'required'

            /*'matricule' => 'required|size:12|unique:Inscriptions,matricule',
            'nom' => 'required',
            'prenom' => 'required',
            'email' => 'required|email',
            'dateNaiss'=> 'required|date',
            'lieuNaiss' => 'required',
            'telephone' => 'required'*/
        ]);

        $inscription = new Inscription();
        $inscription->matricule = $request->matricule;
        $inscription->etudiant_id = $etudiant_id;
        $inscription->annee = $request->annee;
        $inscription->nomClasse = $request->nomClasse;
        $inscription->numSemestre = $request->numSemestre;
       
        $inscription->save();



        $value = "Enregistrement éffectué avec succès...!";
        $request->session()->flash('success', $value);
        return redirect()->route('inscription.index');
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
        $inscription = Inscription::find($id);
        return view('admin.inscription.editInscription',compact('inscription'));
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
            'matricule'=>'required',
            'annee' =>'required',
            'nomClasse'=>'required',
            'numSemestre'=>'required'

        ]);
        Inscription::whereId($id)->update($data);
        return redirect()->route('inscription.index');     
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Inscription $inscription)
    {
        $inscription->delete();
        return redirect()->route('inscription.index'); 
    }
}
