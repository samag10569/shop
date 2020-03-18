<?php

namespace App\Http\Middleware;
use Illuminate\Support\Facades\Auth;
use App\Models\User;
use Closure;

class admin 
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
        // return $next($request);
        return redirect('/login');
    //     if(Auth::check() && Auth::user()->isadmin()){
    //         echo "admin";
    //         return $next($request);
    //     }else{
    //         echo "not admin!";
    //     }
    //     abort(403);
    // }
    // return $next($request);



//     if (Auth::check() && Auth::user()->isAdmin()) {
//         return $next($request);
//  }else{
//    return redirect('/');
//  }



}
}
