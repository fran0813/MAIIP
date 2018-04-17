<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;
use \Response;
use App\User;

class SuperAdminController extends Controller
{
    public function index()
    {
        return view('superAdmin.index');
    }

    public function activarUsuario()
    {
        return view('superAdmin.activarUsuario');
    }

    public function mostrarTablaActivarUsuario(Request $request)
    {
        $html = "";

        $html .= "<table class='table table-bordered'>
                <thead class='thead-s'>
                <tr>";

        $html .= "<th class='text-center'>Nombre</th>";
        $html .= "<th class='text-center'>Correo</th>";
        $html .= "<th class='text-center'>Estado</th>";

        $html .= "</tr>
                </thead>
                <tbody>";

        $users = User::where('id', '!=', Auth::user()->id)
    				->orderBy('name', 'asc')
                    ->get();        
        foreach ($users as $user) {
            $id = $user->id;
            $name = $user->name;
            $email = $user->email;
            $active = $user->active;

            if ($active == "False") {
            	$html .= "<tr class='border-dotted'>";
	            $html .= "<td class='text-center'>$name</td>";
	            $html .= "<td class='text-center'>$email</td>";
	            $html .= "<td class='text-center' style='width: 20%;'>";
	            $html .= "<a id='$id' href='#' class='btn btn-info' value='activar' style='margin-right: 1%;'>Activar</a>";
	            $html .= "</td>";
	            $html .= "</tr>";
            } else {
	            $html .= "<tr class='border-dotted'>";
	            $html .= "<td class='text-center'>$name</td>";
	            $html .= "<td class='text-center'>$email</td>";
	            $html .= "<td class='text-center' style='width: 20%;'>";
	            $html .= "<a id='$id' href='#' class='btn btn-danger' value='desactivar' style='margin-right: 1%;'>Desactivar</a>";
	            $html .= "</td>";
	            $html .= "</tr>";
        	}
  
        }

        $html .= "</tbody>
                </table>";

        return Response::json(array('html' => $html));
    }

    public function ActualizarActivarUsuario(Request $request)
    {
    	$id = $_POST['id'];
    	$estado = $_POST['estado'];

    	if ($estado == "activar") {
    		$active = "True";
    	} else {
    		$active = "False";
    	}

        $update_user = User::find($id);
        $update_user->active = $active;
        $update_user->save();

        return Response::json(array('html' => 'Ok'));
    }
}
