<?php

namespace App\Http\Middleware;

use Closure;

class CheckPermission
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle($request, Closure $next,$slug)
    {
        if (!$request->user()->hasPermissionTo($slug)) {
            return redirect('403');
        }


        return $next($request);
    }
}
