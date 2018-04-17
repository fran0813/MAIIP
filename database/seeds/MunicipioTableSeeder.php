<?php

use Illuminate\Database\Seeder;
use App\Municipio;

class MunicipioTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $municipio = new Municipio();
        $municipio->codigoM = '307';
        $municipio->nombre = 'Girardot';
        $municipio->catMun = '2a';
        $municipio->departamento_id = '1';
        $municipio->save();
    }
}
