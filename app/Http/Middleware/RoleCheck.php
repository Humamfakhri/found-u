<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;
use Illuminate\Support\Facades\Auth;

class RoleCheck
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next, $roles): Response
    {
        // Padahal nggeus login tapi tetep teu ka auth, jadi asup ka if ieu
        if (!Auth::check()) {
            // return redirect('/');
        }

        $akun = Auth::user();
        if ($akun->role == $roles) {
            return $next($request);
        }
        
        return redirect('/')->with('error', 'Anda tidak memiliki akses');
    }
}
