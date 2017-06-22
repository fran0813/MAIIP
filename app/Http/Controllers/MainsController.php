<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Session;
use Illuminate\Support\Facades\DB;
use \Response;

class MainsController extends Controller
{

  public function __construct(){
  }

  // Redirecciona a la pagina principal
  public function index()
  {
    return view('information.main');
  }

  // Redirecciona al login
  public function login()
  {
    return view('user.login');
  }

  // Muestra los departamentos
  public function admin(Request $request){

    $username = $_GET['username'];
    $password = $_GET['password'];

    $resultados = DB::table('usuarios')
                    ->select('usuarios.*')
                    ->where('usuarios.usuario', $username)
                    ->where('usuarios.contrasenia', $password)
                    ->orWhere('usuarios.email', $username)
                    ->where('usuarios.contrasenia', $password)
                    ->get();

    $html = "false";

    foreach ($resultados as $resultado) {
      $html = "true";

    };

    return Response::json(array('html' => $html, ));

  }

}
