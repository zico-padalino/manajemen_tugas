<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Symfony\Component\HttpFoundation\Response;

class checklogin
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next): Response
    {
        if (Auth::check()) {
            session()->flash('success', 'Anda Berhasil Login.');
             return $next($request);
        } else{
            session()->flash('eror', 'You must be logged in to access this page.');
            return redirect()->route('login');
        }
       
    }
}
