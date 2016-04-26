<?php

namespace App\Http\Middleware;

use Closure;

class AuthenticateMobile
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
        if (!$request->session()->has("id")) {
            /*if user not a session but have a cookie*/
             if($request->cookie("id") ){
                $request->session()->put('id', $request->cookie("id"));
                return $next($request);
            }
            else{
                $response = ['status' => 'notLogin'];
                return response()->json($response);
            }
        }
        return $next($request);
    }
}
