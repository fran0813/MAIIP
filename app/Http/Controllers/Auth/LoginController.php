<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use \Response;
use App\User;

class LoginController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Login Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles authenticating users for the application and
    | redirecting them to your home screen. The controller uses a trait
    | to conveniently provide its functionality to your applications.
    |
    */

    use AuthenticatesUsers;

    /**
     * Where to redirect users after login.
     *
     * @var string
     */
    // protected $redirectTo = '/home';
    
    public function authenticated(Request $request)
    {
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

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest')->except('logout');
    }
}
