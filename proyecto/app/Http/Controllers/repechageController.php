<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class repechageController extends Controller
{
    function playRepechageGame(){    	
    	return View('gameRepechage');        
    }

    function goToworldCup(){
    	try{
            $listaEquipos= \DB::select('SELECT * FROM Equipo AS e inner join Confederacion AS c ON(e.idConfederacion=c.id) ORDER BY puntos DESC');
            $envioDatosEquipo = ['listaEquipos' => $listaEquipos];
            try{
            $listConfederations= \DB::select("SELECT * FROM Confederacion");
            $envioDatoslistConfederations = ['listConfederations' => $listConfederations];
           	return View('repechage', $envioDatosEquipo,$envioDatoslistConfederations);            
	        }catch(\Illuminate\Database\QueryException $ex){
	            return $ex;
	        }
            
        } catch(\Illuminate\Database\QueryException $ex){
            return $e;
        }	
    }
}