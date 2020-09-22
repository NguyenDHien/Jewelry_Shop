<?php

namespace App\Http\Middleware;

use App\Providers\RouteServiceProvider;
use Closure;
use Illuminate\Auth\Middleware\Authenticate as Middleware;
use Illuminate\Support\Facades\Auth;

class Authenticate extends Middleware
{
    /**
     * Get the path the user should be redirected to when they are not authenticated.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return string|null
     */
    // protected function redirectTo($request)
    // {
    //     if (!$request->expectsJson()) {
    //         return route('admin.login');
    //     }
    // }
    public function handle($request, Closure $next)
    {
        // chua login
        if (!Auth::check()) {
            return redirect()->route('admin.login');
        }
        // if (Auth::check()) {
        //     return redirect()->intended(RouteServiceProvider::HOME);
        // }
        $user = Auth::user();
        $route = $request->route()->getName();
        $user->can($route);

        return $next($request);
    }
}
