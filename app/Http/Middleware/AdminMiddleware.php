<?php

namespace App\Http\Middleware;
use Illuminate\Http\Response;
use Closure;

class AdminMiddleware
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
        if ($request->user() && $request->user()->admin != 0){
            return new Response(view('unauthorized')->with('role', 'Administrador'));
            //return view('unauthorized', ['role', 'Administrador']);
        }
        return $next($request);
    }
}
