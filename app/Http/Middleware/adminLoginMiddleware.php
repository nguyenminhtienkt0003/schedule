<?php

namespace App\Http\Middleware;

use Closure;
use Auth;
class adminLoginMiddleware
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
        if(Auth::check())
        {
            $user= Auth::user();
            if($user->id_Role==1 || $user->id_Role==2)
                return $next($request);
            else
                return redirect('admin/login');
        }
        
        else
        {
            return redirect('admin/login');
        }
    }
}
