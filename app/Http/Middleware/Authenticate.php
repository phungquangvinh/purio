<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Support\Facades\Auth;
use Predis\Client;

class Authenticate
{
    /**
     * Handle an incoming request.
     *
     * @param $request
     * @param Closure $next
     * @param null $guard
     * @return \Illuminate\Contracts\Routing\ResponseFactory|\Illuminate\Http\RedirectResponse|\Symfony\Component\HttpFoundation\Response
     */
    public function handle($request, Closure $next, $guard = null)
    {
        if (Auth::guard($guard)->guest()) {
            if ($request->ajax()) {
                return response('Unauthorized.', 401);
            } else {
                if ($guard == 'web_admin') {
                    return redirect()->route('admin.login');
                } else if ($guard == 'web_manager') {
                    return redirect()->route('manager.login');
                } else if ($guard == 'web_display') {
                    return redirect()->route('index');
                }
            }
        }
        return $next($request);
    }
}