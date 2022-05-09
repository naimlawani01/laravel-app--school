<?php

namespace App\Http\Controllers;

use App\User;
use App\Professeur;
use App\Models\Role;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class UsersController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $roles = Role::all();

        return view('admin.users.create',compact('roles'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request,[
            'name' => 'required|string|max:255',
            'email' => 'required|string|email|max:255|unique:users',
            'password' => 'required|string|min:6|confirmed',
            'role_id' => 'required',
        ]);

        $user = new User;
        $user->name=$request->name;
        $user->email=$request->email;
        $user->email_verified_at=date('Y-m-d H:i:s');
        $user->password=Hash::make($request->password);
        $user->role_id=intval($request->role_id);
        $user->save();

        
        return redirect()->route('users.show', $user);
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

    public function profile()
    {
        if (Auth::user()->role_id==3) 
        {
            $professeur= Professeur::select('id')->where('email', Auth::user()->email)->first();
            $matieres= DB::select('Select *
            from  matieres
            where  professeur_id=?', [$professeur->id]);
        }elseif(Auth::user()->role_id == 4)
        {
            $matricule_etudiant = Auth::user()->etudiant->matricule;
            $matieres_notees = (new EtudiantController)-> matieresEvaluees($matricule_etudiant);
            $liste_sessions = (new EtudiantController)->listeSessions($matricule_etudiant);
            $liste_dettes = (new EtudiantController)->listeDettesParSemestre($matricule_etudiant);
        }
        
        return view('admin.users.profile',compact('matieres','professeur','matieres_notees','liste_sessions','liste_dettes'));
    }

    public function store_profile(Request $request)
    {
        $user = User::find($request->id);

        dd($user);

        $this->validate($request,[
            'password' => 'required|string|min:6|confirmed',
        ]);
    }
}
