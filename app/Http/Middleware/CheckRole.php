<?php

namespace App\Http\Middleware;

use Closure;

class CheckRole
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle($request, Closure $next)
    {
        if($request->user()->hasRole('Worker')){
            return redirect('/posts');
        }

        if($request->user()->hasRole('Department chef') || $request->user()->hasRole('Admin'))
        {
            return redirect('/admin/dashboard');
        }

        return $next($request);
    }
}
