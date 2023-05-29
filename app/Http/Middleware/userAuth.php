<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;

class userAuth
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure(\Illuminate\Http\Request): (\Illuminate\Http\Response|\Illuminate\Http\RedirectResponse)  $next
     * @return \Illuminate\Http\Response|\Illuminate\Http\RedirectResponse
     */
    public function handle(Request $request, Closure $next)
    {
        
        if (!Session::has('email') && !Cookie::has('email')){
            return redirect()->route('login');
        }
        else if(Cookie::has('email')){
            Session::put('email', Cookie::get('email'));
        }
        return $next($request);
    }
}
