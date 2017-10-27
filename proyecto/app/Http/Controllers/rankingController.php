<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class rankingController extends Controller
{
    public function index()
    {
        try{
            $listaEquipos= \DB::select('SELECT * FROM Equipo AS e inner join Confederacion AS c ON(e.idConfederacion=c.id) ORDER BY puntos DESC');
            $envioDatosEquipo = ['listaEquipos' => $listaEquipos];
            return View('ranking', $envioDatosEquipo);
        } catch(\Illuminate\Database\QueryException $ex){
            return $e;
        }
    }
    public function enableTeam()
    {
        $nombreEquipo = $_POST['id'];
        \DB::statement("EXEC changeEnableAttributeTeam '" . $nombreEquipo . "'");
    }
}
