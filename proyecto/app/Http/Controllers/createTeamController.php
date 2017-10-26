<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class createTeamController extends Controller
{
    public function edit($id)
    {
        $name= $_POST['nameInsU'];
        $point= $_POST['pointInsU'];
        $flag= $_POST['flagInsU'];
        $active= 1;
        $idConfederation= $_POST['categorieInsU'];
        try{                                    

			\DB::insert("UPDATE Equipo SET puntos= '".$point."',bandera= '".$flag."',activado= '".$active."', idConfederacion= '".$idConfederation."' WHERE nombreEquipo = '".$name."')");
            return redirect('http://localhost:8000/ranking');            
        }catch(\Illuminate\Database\QueryException $ex){
            echo $ex;
        }
    }

    public function showTeamInformation(){
    	echo "entro aqui";
    	$nombreEquipo = $_POST['nombreE'];
 		$equipo= \DB::select("SELECT * FROM Equipo WHERE nombreEquipo = '".$nombreE."')");        
        return $equipo;
    }

    public function create()
    {        
        $name= $_POST['nameIns'];
        $point= $_POST['pointIns'];
        $flag= $_POST['flagIns'];
        $active= 1;
        $idConfederation= $_POST['categorieIns'];       
        try{    
            \DB::insert("INSERT INTO Equipo(nombreEquipo,puntos,bandera,activado,idConfederacion) VALUES ('".$name."','".$point."','".$flag."','".$active."','".$idConfederation."')");                                
            return redirect('http://localhost:8000/ranking');
        }catch(\Illuminate\Database\QueryException $ex){
            echo $ex;
        }
    }
}
