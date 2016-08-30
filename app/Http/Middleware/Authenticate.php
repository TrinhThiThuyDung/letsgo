<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\AuthController;

class Authenticate
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @param  string|null  $guard
     * @return mixed
     */
    public function handle($request, Closure $next)
    {

        if (!$request->session()->has("id")) {
            /*if user not a session but have a cookie*/
           /*  if($request->cookie("id") ){
                $request->session()->put('id', $request->cookie("id"));
                return $next($request);
            }
            else{*/
                $response = ['status' => 'notLogin'];
                return redirect()->route("login");
           // }
        }
        return $next($request);
    }
}
