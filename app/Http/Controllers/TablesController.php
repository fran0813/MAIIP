<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Departamento;
use App\Demografia;

class TablesController extends Controller
{
    //Tabla de generalidades y territorio que se muestra en la pagina principal 
    public function generalidadesterritorio()
    {   
      return view('information.tables.generalidadesterritorio');
    }

    //Tabla de demografia que se muestra en la pagina principal 
    public function demografia()
    {
      return view('information.tables.demografia');
    }

    //Tabla de vivienda y servicios publicos que se muestra en la pagina principal 
    public function viviendasserviciospublicos()
    {
      return view('information.tables.viviendaserviciospublicos');
    }

    //Tabla de salud que se muestra en la pagina principal 
    public function salud()
    {
      return view('information.tables.salud');
    }

    //Tabla de educacion que se muestra en la pagina principal 
    public function educacion()
    {
      return view('information.tables.educacion');
    }
}
