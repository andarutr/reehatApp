<?php

namespace App\Http\Middleware;

use Auth;
use Closure;
use Illuminate\Http\Request;

class isAdmin
{
    public function handle($request, Closure $next)
    {
        if(Auth::check()){
            if(Auth::user()->role_id == 1){
                return $next($request);
            }else{
                return redirect('/auth/login/pengurus');
            }
        }else{
            return redirect('/auth/login/pengurus');
        }
    }
}
