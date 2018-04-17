<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use \Response;
use App\User;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
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
}
