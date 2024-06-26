<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Symfony\Component\HttpFoundation\Response;

class RoleMiddleware
{
    
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next, $guard = null)
    {
        if(isset($guard) && $guard == 'admin') {
            
            if(!Auth::check()) return redirect()->route('admin.auth.login');

            view()->share('groupModules', Auth::user()->groupMenus());
            if(Auth::user()->role->nama === 'superadmin') return $next($request);

            return redirect('/login');
        }

        if(isset($guard) && $guard == 'mitra') {
            
            if(!Auth::check()) return redirect('/login');
            
            view()->share('groupModules', Auth::user()->groupMenus());

            if(Auth::user()->role->nama === 'mitra') return $next($request);

            return redirect('/');
        }

        return $next($request);
    }
}
