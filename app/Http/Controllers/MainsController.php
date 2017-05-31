<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Departamento;
use App\Http\Controllers\Session;

class MainsController extends Controller
{
    public function index()
    {
      return view('information.main');
    }

    public function login()
    {
      return view('user.login');
    }
}
