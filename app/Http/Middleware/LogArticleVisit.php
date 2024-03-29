<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;

class LogArticleVisit
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
        if(!$request->cookie('unique_id')) {
            $uniqueId = uniqid(); // generate unique identifier using php function
            return $next($request)->cookie('unique_id', $uniqueId, 2); // cookie_name, value, time
        }
        
        return $next($request);
    }
}
