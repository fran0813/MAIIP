<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class municipio extends Model
{
    protected $table = "municipios";

    protected $fileable = ['codigo', 'nombre', 'idDepartamentos']
}
