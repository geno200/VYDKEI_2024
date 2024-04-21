<?php

namespace App\Http\Middleware;

use Closure;

class CheckEditorRole
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure(\Illuminate\Http\Request): (\Illuminate\Http\Response|\Illuminate\Http\RedirectResponse)  $next
     * @return \Illuminate\Http\Response|\Illuminate\Http\RedirectResponse
     */
    public function handle($request, Closure $next)
    {
        if ($request->user() && $request->user()->hasRole('teacher')) {
            return $next($request);
        }

        abort(403, 'Nincs jogosultságod az oldal megtekintéséhez.');
    }
}
