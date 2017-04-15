<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Departamento;

class MainController extends Controller
{

    public function index()
    {
    	return view('index');
    }

    public function show($id ='null')
    {
    	$dep = Departamento::find($id);

    	$dep->codigo;
    	$dep->nombre;
    	
        return view('informacion', ['prueba' => $dep]);
    }

}
