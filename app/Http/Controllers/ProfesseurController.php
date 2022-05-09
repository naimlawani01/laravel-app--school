<?php

namespace App\Http\Controllers;

use App\User;
use App\Matiere;
use App\Professeur;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class ProfesseurController extends Controller
{

    public function __construct()
    {
        $this->middleware('checkAdmin');
        //$this->middleware('checkDGAE');
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $professeurs = Professeur::paginate(5);
        $matieres = Matiere::paginate(5);
        
        return view('admin.professeur.index',compact('professeurs','matieres'));
    }
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.professeur.addProf');
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
            'matricule' => 'required',
            'nom' => 'required',
            'prenom' => 'required',
            'email' => 'required|email',
            'telephone' => 'required'
        ]);

        $prof = new Professeur();
        $prof->matricule = $request->matricule;
        $prof->nom = $request->nom;
        $prof->prenom = $request->prenom;
        $prof->email = $request->email;
        $prof->telephone = $request->telephone;
        $prof->save();

        $user_prof = new User();

        $user_prof->name = $request->nom.' '.$request->prenom;
        $user_prof->email = $request->email;
        $user_prof->password =  Hash::make('123456');
        $user_prof->role_id =  3;
        $user_prof->save();


        $value = "Enregistrement éffectué avec succès...!";
        $request->session()->flash('success', $value);
        return redirect()->route('professeur.index');
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
        $professeur = Professeur::find($id);
        return view('admin.professeur.editProf',compact('professeur'));
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
            'matricule' => 'required',
            'nom' => 'required',
            'prenom' => 'required',
            'email' => 'required|email',
            'telephone' => 'required'
        ]);
        Professeur::whereId($id)->update($data);
        return redirect()->route('professeur.index');        
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Professeur::whereId($id)->delete();
        return redirect()->route('professeur.index');
    }
}
