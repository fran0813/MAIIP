<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;
use Maatwebsite\Excel\Facades\Excel;
use Storage;
use File;
use \Response;
use App\Departamento;
use App\Municipio;
use App\Generalidadterritorio;
use App\Viviendaserviciopublico;
use App\Salud;

class AdminController extends Controller
{
    public function index()
    {
        return view('admin.index');
    }

    public function tableGeneralidadesterritorio()
    {
      return view('admin.generalidadesTerritorios.index');
    }

    public function tableDemografia()
    {
      return view('admin.demografias.index');
    }

    public function tableViviendasserviciospublicosa()
    {
      return view('admin.viviendaServiciosPublicos.index');
    }

    public function tableSalud()
    {
      return view('admin.salud.index');
    }

    public function tableEducacion()
    {
      return view('admin.educacion.index');
    }

    public function tableSeguridadviolencia()
    {
      return view('admin.seguridadviolencia.index');
    }

    public function tableEconomicosocial()
    {
      return view('admin.economicosocial.index');
    }

    public function tableFinanza()
    {
      return view('admin.finanza.index');
    }

    public function tableDepartamento()
    {
      return view('admin.departamento.index');
    }

    public function tableMunicipio()
    {
      return view('admin.municipio.index');
    }

    public function establecerDepartamento(Request $request)
    {
      $idDepartamento = $_POST['idDepartamento'];
      $request->session()->put("departamento_select",$idDepartamento);
      return Response::json(array('msg' => "ok",));
    }

    public function mostrarDepartamentos(Request $request)
    {
      $html = "";
      $departamento_select = null;

      if ($request->session()->get("departamento_select")) {
        $departamento_select = $request->session()->get("departamento_select");
      }

      $html .= "<option>Seleccione un departamento</option>";

      $departamentos = Departamento::orderBy('departamentos.nombre', 'desc')
            ->get();
      foreach ($departamentos as $departamento) {
        $id = $departamento->id;
        $nombre = $departamento->nombre;

        if ($id == $departamento_select) {
          $html .= "<option selected value='$id'>$nombre</option>";
        } else {
          $html .= "<option value='$id'>$nombre</option>";
        }
      }

      return Response::json(array('html' => $html));
    }

    public function establecerMunicipio(Request $request)
    {
      $idMunicipio = $_POST['idMunicipio'];
      $request->session()->put("municipio_select",$idMunicipio);
      return Response::json(array('msg' => "ok",));
    }

    public function mostrarMunicipios(Request $request)
    {
      $html = "";
      $municipio_select = null;
      $idDepartamento = $_GET['idDepartamento'];

      if ($request->session()->get("municipio_select")){
        $municipio_select = $request->session()->get("municipio_select");
      }

      $html .= "<option>Seleccione un municipio</option>";

      $municipios = Municipio::where('departamento_id', $idDepartamento)
          ->orderBy('municipios.nombre', 'desc')
          ->get();
      foreach ($municipios as $municipio) {
        $id = $municipio->id;
        $nombre = $municipio->nombre;

        if ($id == $municipio_select) {
          $html .= "<option selected value='$id'>$nombre</option>";
        } else {
          $html .= "<option value='$id'>$nombre</option>";
        }
      }

      return Response::json(array('html' => $html));
    }

    public function actualizarMunicipio(Request $request)
    {
      $id = $_POST['id'];
      $codigoM = $_POST['codigoM'];
      $nombre = $_POST['nombre'];
      $catMun = $_POST['catMun'];

      $municipio_update = Municipio::find($id);
      $municipio_update->codigoM = $codigoM;
      $municipio_update->nombre = $nombre;
      $municipio_update->catMun = $catMun;
      $municipio_update->save();

      $html = "Se actualizaron los datos correctamente";

      return Response::json(array('html' => $html));
    }

    public function borrarMunicipio(Request $request)
    {
      $id = $_GET['id'];

      $municipio_delete = Municipio::find($id);
      $municipio_delete->delete();

      $html = "Se eliminaron los datos correctamente";

      return Response::json(array('html' => $html));
    }

    public function crearMunicipio(Request $request)
    {
      $codigoM = $_POST['codigoM'];
      $nombre = $_POST['nombre'];
      $catMun = $_POST['catMun'];
      $departamento_id = $_POST['departamento_id'];
      $ban = False;

      $resultados = Municipio::where('codigoM', $codigoM)
                ->get();
      foreach ($resultados as $resultado) {
        $ban = True;
      }

      if ($ban == False) {

        $municipio_create = new Municipio;
        $municipio_create->codigoM = $codigoM;
        $municipio_create->nombre = $nombre;
        $municipio_create->catMun = $catMun;
        $municipio_create->departamento_id = $departamento_id;
        $municipio_create->save();

        $html = "Se registrarón los datos correctamente";
      } else {
        $html = "Ya se encuentra registrado ese año";
      }

      return Response::json(array('html' => $html));
    }

    public function mostrarActualizarMunicipio()
    {
      $id = $_POST['id'];
      $html = "";

      $resultados = Municipio::where('id', $id)
            ->get();

      foreach ($resultados as $resultado) {
        $id = $resultado->id;
        $codigoM = $resultado->codigoM;
        $nombre = $resultado->nombre;
        $catMun = $resultado->catMun;
      };

      return Response::json(array('id' => $id,
                    'codigoM' => $codigoM,
                    'nombre' => $nombre,
                    'catMun' => $catMun,
                  ));
    }

    public function mostrarTablaMunicipio(Request $request)
    {
      $idDepartamento = $_GET['idDepartamento'];

      $resultados = Municipio::where('departamento_id', $idDepartamento)
              ->orderBy('nombre')
              ->get();

      $html = "";
      $html .= "<table class='table table-striped table-bordered table-hover'>
          <thead>
          <tr>
          <th>Codigo</th>
          <th>Nombre</th>
          <th>Categoria</th>
          <th>Funciones</th>
          </tr>
          </thead>
          <tbody>";

      foreach ($resultados as $resultado) {
        $id = $resultado->id;
        $codigoM = $resultado->codigoM;
        $nombre = $resultado->nombre;
        $catMun = $resultado->catMun;

        $html .= "<tr>
            <td>$codigoM</td>
            <td>$nombre</td>
            <td>$catMun</td>
            <td><a id='$id' href='#' class='btn btn-success' data-toggle='modal' data-target='#modalMostrarActualizar' value='editar'>Editar</a></td>
            </tr>";
      }

      $html .= "</tbody>
          </table>";

      // <a id='$id' href='#' class='btn btn-danger'>Borrar</a>

      return Response::json(array('html' => $html));
    }

    public function subiendoArchivoMunicipio()
    {
        return view('admin.municipio.subiendoArchivoMunicipio');
    }

    public function guardarArchivoMunicipio(Request $request)
    {
      $file = $request->file('file');
      $name = $file->getClientOriginalName();
      Storage::disk('form')->put($name,  File::get($file));

      $request->session()->put('nameArchivoMunicipio', $name);

      return redirect('/admin/subiendoArchivoMunicipio');
    }

    public function subirRespuestaMunicipio(Request $request)
    {     
      
      $nameArchivo = null;
      $html = "a";

      if ($request->session()->get("nameArchivoMunicipio")) {
          $nameArchivo = $request->session()->get("nameArchivoMunicipio");
      }   

      Excel::load('public/excel/'.$nameArchivo, function($reader)
      {
        $booleanDepartamento = False;
        $booleanCodigo = False;
        $data = array();
        $time = date('Y/m/d H:i');

        $results = $reader->get();

        foreach ($results as $result) {

          $resultados = Departamento::where('nombre', $result->departamento)
            ->limit(1)
            ->get();

          foreach ($resultados as $resultado) {
            $id = $resultado->id;
            $booleanDepartamento = True;
          }

          if ($booleanDepartamento == True) {

            $resultados2 = Municipio::where('codigoM', $result->codigo)
              ->limit(1)
              ->get();
            foreach ($resultados2 as $resultado) {
              $booleanCodigo = True;
            }

            if ($booleanCodigo == False) {

              $data[] = array('codigoM' => $result->codigo, 'nombre' => $result->nombre, 'catMun' => $result->categoria, 'departamento_id' => $id, 'created_at' => $time, 'updated_at' => $time);

              // $html .= "<h1 class='text-center' style='margin-top: 0px;'>Se ha subido los datos correctamente</h1>";
            } else {
              // $html .= "<h1 class='text-center' style='margin-top: 0px;>el código ya éxiste.$result->codigo</h1>";
            }   
              
          } else {
            // $html .= "<h1 class='text-center' style='margin-top: 0px;'>No se encontro el departamento.$result->departamento</h1>";
          }
        
        }

        Municipio::insert($data);
             
      });
// $html = "";
      // return Response::json(array('html' => $html)); 
      // return Response::json(array('html' => $html, 'boolean' => $booleanDepartamento)); 

    }

    public function descargarMunicipio(Request $request)
    {
      $data = array();

      Excel::create('Municipio', function($excel) {
 
          $excel->sheet('Importar', function($sheet) {

              $data[] = array('codigo' => "", 'nombre' => "", 'categoria' => "", 'departamento' => "");

              $sheet->fromArray($data);

          });
      })->export('xls');
    }

    public function actualizarDepartamento(Request $request)
    {
      $id = $_POST['id'];
      $codigoD = $_POST['codigoD'];
      $nombre = $_POST['nombre'];

      $departamento_update = Departamento::find($id);
      $departamento_update->codigoD = $codigoD;
      $departamento_update->nombre = $nombre;
      $departamento_update->save();

      $html = "Se actualizaron los datos correctamente";

      return Response::json(array('html' => $html));
    }

    public function borrarDepartamento(Request $request)
    {
      $id = $_GET['id'];

      $departamento_delete = Departamento::find($id);
      $departamento_delete->delete();

      $html = "Se eliminaron los datos correctamente";

      return Response::json(array('html' => $html));
    }

    public function crearDepartamento(Request $request)
    {
      $codigoD = $_POST['codigoD'];
      $nombre = $_POST['nombre'];
      $ban = False;

      $resultados = Departamento::where('codigoD', $codigoD)
                ->get();
      foreach ($resultados as $resultado) {
        $ban = True;
      }

      if ($ban == False) {

        $departamento_create = new Departamento;
        $departamento_create->codigoD = $codigoD;
        $departamento_create->nombre = $nombre;
        $departamento_create->save();

        $html = "Se registraron los datos correctamente";
      } else {
        $html = "Ya se encuentra registrado ese año";
      }

      return Response::json(array('html' => $html));
    }

    public function mostrarActualizarDepartamento()
    {
      $id = $_POST['id'];
      $html = "";

      $resultados = Departamento::where('id', $id)
            ->get();

      foreach ($resultados as $resultado) {
        $id = $resultado->id;
        $codigoD = $resultado->codigoD;
        $nombre = $resultado->nombre;
      };

      return Response::json(array('id' => $id,
                    'codigoD' => $codigoD,
                    'nombre' => $nombre,
                  ));
    }

    public function mostrarTablaDepartamento(Request $request)
    {

      $resultados = Departamento::orderBy('nombre')
              ->get();

      $html = "";
      $html .= "<table class='table table-striped table-bordered table-hover'>
          <thead>
          <tr>
          <th>Codigo</th>
          <th>Nombre</th>
          <th>Funciones</th>
          </tr>
          </thead>
          <tbody>";

      foreach ($resultados as $resultado) {
        $id = $resultado->id;
        $codigoD = $resultado->codigoD;
        $nombre = $resultado->nombre;

        $html .= "<tr>
            <td>$codigoD</td>
            <td>$nombre</td>
            <td><a id='$id' href='#' class='btn btn-success' data-toggle='modal' data-target='#modalMostrarActualizar' value='editar'>Editar</a></td>
            </tr>";
      }

      $html .= "</tbody>
          </table>";

      // <a id='$id' href='#' class='btn btn-danger'>Borrar</a>

      return Response::json(array('html' => $html));
    }

    public function subiendoArchivoDepartamento()
    {
        return view('admin.departamento.subiendoArchivoDepartamento');
    }

    public function guardarArchivoDepartamento(Request $request)
    {
      $file = $request->file('file');
      $name = $file->getClientOriginalName();
      Storage::disk('form')->put($name,  File::get($file));

      $request->session()->put('nameArchivoDepartamento', $name);

      return redirect('/admin/subiendoArchivoDepartamento');
    }

    public function subirRespuestaDepartamento(Request $request)
    {     
      
      $nameArchivo = null;
      $html = "a";

      if ($request->session()->get("nameArchivoDepartamento")) {
          $nameArchivo = $request->session()->get("nameArchivoDepartamento");
      }   

      Excel::load('public/excel/'.$nameArchivo, function($reader)
      {
        $booleanDepartamento = True;
        $booleanCodigo = False;
        $data = array();
        $time = date('Y/m/d H:i');

        $results = $reader->get();

        foreach ($results as $result) {

          // $resultados = Departamento::where('nombre', $result->departamento)
          //   ->limit(1)
          //   ->get();

          // foreach ($resultados as $resultado) {
          //   $id = $resultado->id;
          //   $booleanDepartamento = True;
          // }

          if ($booleanDepartamento == True) {

            $resultados2 = Departamento::where('codigoD', $result->codigo)
              ->limit(1)
              ->get();
            foreach ($resultados2 as $resultado) {
              $booleanCodigo = True;
            }

            if ($booleanCodigo == False) {

              $data[] = array('codigoD' => $result->codigo, 'nombre' => $result->nombre, 'created_at' => $time, 'updated_at' => $time);

              // $html .= "<h1 class='text-center' style='margin-top: 0px;'>Se ha subido los datos correctamente</h1>";
            } else {
              // $html .= "<h1 class='text-center' style='margin-top: 0px;>el código ya éxiste.$result->codigo</h1>";
            }   
              
          } else {
            // $html .= "<h1 class='text-center' style='margin-top: 0px;'>No se encontro el departamento.$result->departamento</h1>";
          }
        
        }

        Departamento::insert($data);
             
      });
// $html = "";
      // return Response::json(array('html' => $html)); 
      // return Response::json(array('html' => $html, 'boolean' => $booleanDepartamento)); 

    }

    public function descargarDepartamento(Request $request)
    {
      $data = array();

      Excel::create('Departamento', function($excel) {
 
          $excel->sheet('Importar', function($sheet) {

              $data[] = array('codigo' => "", 'nombre' => "");

              $sheet->fromArray($data);

          });
      })->export('xls');
    }
}
