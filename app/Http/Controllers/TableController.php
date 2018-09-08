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

    public function finanza()
    {
      return view('user.tables.finanza');
    }

    // nuevo
    public function pdfgeneralidadesterritorio()
    {
      return view('user.pdf.view.generalidadesterritorio');
    }

    public function pdfdemografia()
    {
      return view('user.pdf.view.demografia');
    }

    public function pdfviviendasserviciospublicos()
    {
      return view('user.pdf.view.viviendaserviciospublicos');
    }

    public function pdfsalud()
    {
      return view('user.pdf.view.salud');
    }

    public function pdfeducacion()
    {
      return view('user.pdf.view.educacion');
    }

    public function pdfseguridadviolencia()
    {
      return view('user.pdf.view.seguridadviolencia');
    }

    public function pdfeconomicosocial()
    {
      return view('user.pdf.view.economicosocial');
    }

    public function pdffinanza()
    {
      return view('user.pdf.view.finanza');
    }
}
