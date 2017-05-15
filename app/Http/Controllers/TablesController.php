<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Departamento;
use App\Demografia;

class TablesController extends Controller
{
    public function generalidadesterritorio()
    {   
      return view('information.tables.generalidadesterritorio');
    }

    public function demografia()
    {
      return view('information.tables.demografia');
    }

    public function viviendasserviciospublicos()
    {
      return view('information.tables.viviendaserviciospublicos');
    }
}
