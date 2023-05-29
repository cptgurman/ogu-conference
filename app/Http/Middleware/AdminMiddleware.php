<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;

class AdminMiddleware
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
        $ar_user_roles = auth()->user()->roles->pluck('id')->toArray();
        if (in_array(3, $ar_user_roles) || in_array(2, $ar_user_roles)) {
            return $next($request);
        } else {
            abort(404);
        }
    }
}
