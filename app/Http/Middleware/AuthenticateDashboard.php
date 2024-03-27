<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AuthenticateDashboard
{
    public function handle(Request $request, Closure $next)
    {
        // dd((Auth::check())); 
        // Check if the user is authenticated
        if (Auth::check()) {
            return $next($request);
        }

        // If not authenticated, redirect to the login page
        return redirect()->route('login');
    }
}
