<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class createTeamController extends Controller
{
    //CREATE

    public function createTeamDone(){
        $name= $_POST['nombreEquipo'];
        $point= $_POST['pointsTeam'];
        $flag= $_POST['flagInsU'];
        $flag = '../img/'.$flag;
        $active= 1;
        $idConfederation= $_POST['categorieInsU'];       
        try{
            \DB::insert("INSERT INTO Equipo(nombreEquipo,puntos,bandera,activado,idConfederacion) VALUES ('".$name."','".$point."','".$flag."','".$active."','".$idConfederation."')");                                
            return redirect('/ranking'); 
        } catch(\Illuminate\Database\QueryException $ex){
            return $e;
        }
    }
}
