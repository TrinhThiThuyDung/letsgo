<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Support\Facades\Auth;

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
            if($request->cookie("id") == null ){
                /*Status is not login*/
                $response = ['status' => 'notLogin'];

                return redirect()->route("homeIndex")->with(json_encode($response));
            }else{

                $request->session()->push('id', $request->cookie("id"));
                return $next($request);
            }
        }
        var_dump($request->session()->get("id"));die;
        return $next($request);
    }
}
