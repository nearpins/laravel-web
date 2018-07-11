<?php

namespace App\Http\Middleware;

use Closure;

use Illuminate\Support\Facades\App;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;


class LangSwith
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    protected $languages = ['en', 'nl'];
    
    public function handle($request, Closure $next)
    {
        dd($request->user()); // This is null!

        return $next($request);
    }
}
