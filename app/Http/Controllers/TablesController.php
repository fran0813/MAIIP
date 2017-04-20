<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Departamento;

class TablesController extends Controller
{
    public function generalidadesterritorio()
    {
      $departamentos = Departamento::orderBy('nombre', 'asc')->get(); 
      return view('information.tables.generalidadesterritorio')->with(['departamentos'=>$departamentos]);
    }
}
