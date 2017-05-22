<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdminsController extends Controller
{
    // Pagina para el inicio de sesión para el administrador
    public function index()
    {
      return view('user.admin.main');
    }

    // Crud de la tabla generalidades y territorio
    public function tableGeneralidadesterritorio()
    {
      return view('user.admin.tables.generalidadesterritorio');
    }

    // Crud de la tabla demografia
    public function tableDemografia()
    {
      return view('user.admin.tables.demografia');
    }

    // Crud de la tabla vivienda y servivios publicos
    public function tableViviendasserviciospublicosa()
    {
      return view('user.admin.tables.viviendaserviciospublicos');
    }

    // Crud de la tabla salud
    public function tableSalud()
    {
      return view('user.admin.tables.salud');
    }

    // Crud de la tabla educacion
    public function tableEducacion()
    {
      return view('user.admin.tables.educacion');
    }

}
