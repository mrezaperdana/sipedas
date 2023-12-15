<?php

namespace App\Http\Middleware;

use Illuminate\Session\TokenMismatchException;
use Closure;
use Illuminate\Http\Request;

class RedirectIfTokenMismatch
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
        try {
            return $next($request);
        } catch (TokenMismatchException $e) {
            return redirect()->guest(route('login'))->withErrors(['session_expired' => 'Your session has expired. Silahkan login kembali.']);
        }
    }
}
