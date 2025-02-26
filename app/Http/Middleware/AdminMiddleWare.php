<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Symfony\Component\HttpFoundation\Response;

class AdminMiddleWare
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next): Response
    {
         // Check if the user is authenticated and has the 'admin' role
         if (Auth::check() && Auth::user()->role === 'admin') {
        // Redirect to another page (like the admin dashboard) if the user is an admin
        return redirect()->route('dashboard.index'); // Change this to your admin dashboard route
        }

        return $next($request);
    }
}
