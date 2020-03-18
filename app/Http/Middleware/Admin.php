<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Support\Facades\Auth;
use App\User;


class Admin
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
//  $a=auth::user(); dd($a);
$auth=auth::check();
//  dd($auth);
        // if($auth==true){
        //      echo "you are logged in";
        // }else{
        //     echo "login first";
        // }
// $a=Auth::user()->isAdmin();
// dd($a);
        // return $next($request);
        // return redirect('/login');
        if (auth::check() && Auth::user()->isAdmin()) {
            // return view('indexadmin');
        return $next($request);

             }else{
               return redirect('/');
             }
    }
}
