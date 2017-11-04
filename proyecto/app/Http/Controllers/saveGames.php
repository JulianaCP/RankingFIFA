<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class saveGames extends Controller
{
    public function saveGame(){

    }

    public function showInfo(){
    	try{
            $listaEquipos= \DB::select('SELECT * FROM Equipo AS e inner join Confederacion AS c ON(e.idConfederacion=c.id) ORDER BY puntos DESC');
            $envioDatosEquipo = ['listaEquipos' => $listaEquipos];
            return View('showSaveGames', $envioDatosEquipo);
        } catch(\Illuminate\Database\QueryException $ex){
            return $e;
        }        
    }
}
