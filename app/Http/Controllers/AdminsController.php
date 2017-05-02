<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdminsController extends Controller
{
    public function index()
    {
      return view('user.admin.main');
    }

    public function tableGeneralidadesterritorio()
    {
      return view('user.admin.tables.generalidadesterritorio');
    }
    
    public function tableDemografia()
    {
      return view('user.admin.tables.demografia');
    }

}
