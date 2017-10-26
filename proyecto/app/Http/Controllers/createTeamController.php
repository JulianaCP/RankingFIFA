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

           \DB::select("UPDATE Equipo SET puntos= '".$point."',bandera= '".$flag."',activado= '".$active."', idConfederacion= '".$idConfederation."' WHERE nombreEquipo = ".$name.")";
            return redirect('/goToMain');            
        }catch(\Illuminate\Database\QueryException $ex){
            echo $ex;
        }
    }

    public function showTeamInformation(){
    	return View('createView');    	
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
            return redirect('/goToMain');
        }catch(\Illuminate\Database\QueryException $ex){
            echo $ex;
        }
    }
}
