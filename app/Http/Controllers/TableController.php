<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Departamento;
use App\Demografia;

class TableController extends Controller
{
    
    public function generalidadesterritorio()
    {
      return view('user.tables.generalidadesterritorio');
    }

    public function demografia()
    {
      return view('user.tables.demografia');
    }

    public function viviendasserviciospublicos()
    {
      return view('user.tables.viviendaserviciospublicos');
    }

    public function salud()
    {
      return view('user.tables.salud');
    }

    public function educacion()
    {
      return view('user.tables.educacion');
    }

    public function seguridadviolencia()
    {
      return view('user.tables.seguridadviolencia');
    }

    public function economicosocial()
    {
      return view('user.tables.economicosocial');
    }
}
