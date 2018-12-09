<?php

namespace App\Http\Middleware;

use Illuminate\Support\Facades\Auth;
use Closure;

class PointCheck
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
        if(Auth::user()['point']>=100){
            return $next($request);
        }else{
            echo "<script> alert('포인트가 부족합니다.'); </script>";
            return redirect('/');
        }
    }
}
