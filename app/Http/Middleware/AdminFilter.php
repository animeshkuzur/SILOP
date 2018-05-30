<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Support\Facades\Auth;
use App\User;

class AdminFilter
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle($request, Closure $next,$guard = null)
    {

        if(Auth::check()){
            $role = Role::find(2)->users->first();

            if($role->id != Auth::user()->id)
                return redirect('admin/login');
        }
        else{
            return redirect('admin/login');
        }
        
        return $next($request);
    }
}
