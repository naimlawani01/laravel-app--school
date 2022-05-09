<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Support\Facades\Auth;

class CheckEtudiant
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle($request, Closure $next)
    {
        if (!Auth::check()) {
            return redirect('login');
        }
        $cur_userUser= Auth::user();
        if ($cur_userUser->role_id !=4) {
            return redirect('dashboard');
        }
        return $next($request);
    }
}
