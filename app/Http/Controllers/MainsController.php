<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Departamento;

class MainsController extends Controller
{
    public function index()
    {
      $departamentos = Departamento::orderBy('nombre', 'asc')->get(); 
      return view('information.main')->with(['departamentos'=>$departamentos]);
    }
}
