<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;
use Illuminate\Support\Facades\Auth;

class AdminMiddleware
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next): Response
    {
        if (Auth::user()) {
            if (Auth::user()->active == 1 && Auth::user()->deleted == 0) {
                return $next($request);
            } else {
                Auth::logout();
                return redirect()->route('loginScreen')->with("error", "Erişim yetkiniz bulunmamaktadır.");
            }
        }

        return redirect()->route('loginScreen')->with("error", "İlk Önce Giriş Yapınız");
    }
}
