<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Providers\RouteServiceProvider;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use \Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Medecin;
use App\User;
use SebastianBergmann\CodeCoverage\Report\Html\Dashboard;

class LoginController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Login Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles authenticating users for the application and
    | redirecting them to your home screen. The controller uses a trait
    | to conveniently provide its functionality to your applications.
    |
    */

    use AuthenticatesUsers;

    protected $redirecTo="dashboard";

    /**
     * Where to redirect users after login.
     *
     * @var string
     */
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest')->except('logout');
    }

    protected function authenticated(Request $request, $user)
    {
        // $username = Auth::user()->name;

        // if($username == "hanaph") $redirecTo = 'admin.dashboard';
        // else if($username == "imran") $redirecTo = 'professeur.matiereProf';
        // else if($username == "allassana") return redirect()->route('etudiant.note',['etudiant'=> 1]);
        return redirect()->route($this->redirecTo);
    }
}
