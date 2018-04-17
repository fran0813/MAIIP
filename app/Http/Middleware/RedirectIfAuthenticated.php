<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use \Response;
use App\User;

class RedirectIfAuthenticated
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @param  string|null  $guard
     * @return mixed
     */
    public function handle($request, Closure $next, $guard = null)
    {
        if (Auth::guard($guard)->check()) {
           $email = Auth::user()->email;

            $users = User::where('email', $email)
                        ->get();
            foreach ($users as $user) {
                $active = $user->active;
            };

            if ($active == 'True') {            
                // Logic that determines where to send the user
                if($request->user()->hasRole('SuperAdmin')){
                    return redirect('/superAdmin/');
                }
                if($request->user()->hasRole('Admin')){
                    return redirect('/admin/');
                }
                // if($request->user()->hasRole('User')){
                //     return redirect('/user/');
                // }
            } else {
                Auth::logout();
            }
        }

        return $next($request);
    }
}
