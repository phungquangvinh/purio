<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Support\Facades\Auth;

class RedirectIfAuthenticated
{

    public function handle($request, Closure $next, $guard = null)
    {
        if (Auth::guard($guard)->check()) {
            if($guard == 'web_admin') {
                return redirect()->route('manager.index');
            } else if ($guard == 'web_manager') {
                return redirect(route('manager.index'));
            }
            else{
                return redirect(route('index'));
            }
        }
        return $next($request);
    }
}