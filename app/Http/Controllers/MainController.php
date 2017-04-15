<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;

class MainController extends Controller
{

    public function index()
    {
    	return view('index');
    }

    public function show()
    {
    	$users = DB::select('select * from users where id = ?', [1]);

        return view('informacion', ['users' => $users]);
    }

}
