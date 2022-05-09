<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Support\Facades\Auth;

class CheckDGAE_Or_Admin
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
        if ($cur_userUser->role_id ==1 or $cur_userUser->role_id ==2) {
            
            return $next($request);
        }
        return redirect('dashboard');
    }
}
