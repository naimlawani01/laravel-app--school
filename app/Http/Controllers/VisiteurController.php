<?php

namespace App\Http\Controllers;
use App\Post;
use App\Matiere; 
use App\MotDirect; 
use Illuminate\Http\Request;

class VisiteurController extends Controller
{
    public function index()
    {
        $motdirecteurs= MotDirect::all();
        $posts= Post::take(4)->get();
        return view('pages.welcome',compact('motdirecteurs','posts')); 
    }
    public function prog()
    {
        $matiereL1= Matiere::all()->whereIn('numSemestre', [1,2]);
        $matiereL2= Matiere::all()->whereIn('numSemestre', [3,4]);
        $matiereL3= Matiere::all()->whereIn('numSemestre', [5,6]);
        return view('pages.programme',compact('matiereL1','matiereL2','matiereL3'));
    }
    
    public function histo()
    {
        return view('pages.historique');
    }
    public function org()
    {
        return view('pages.organigramme');
    }
    public function adm()
    {
        return view('pages.admission');
    }
    public function parte()
    {
        return view('pages.partenaire');
    }
    public function gallery()
    {
        return view('pages.gallery');
    }
    public function show()
    {
        return view('pages.contact');
    }
    public function form()
    {
        return view('pages.FormulaireAdm');
    }
    public function con()
    {
        return view('auth.login');
    }
}
