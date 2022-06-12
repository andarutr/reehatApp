<?php

namespace App\Http\Middleware;

use Auth;
use Closure;
use Illuminate\Http\Request;

class isUser
{
    public function handle($request, Closure $next)
    {
        if(Auth::check()){
            if(Auth::user()->role_id == 2){
                return $next($request);
            }else{
                return redirect('/auth/login/pengguna');
            }
        }else{
            return redirect('/auth/login/pengguna');
        }
    }
}
