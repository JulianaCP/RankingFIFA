<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class updateTeamController extends Controller
{
    //UPDATE
    public function updateTeam($idEquipo){
        
        try{
            $equipo= \DB::select("SELECT * FROM Equipo where nombreEquipo='".$idEquipo."'");
            $envioDatosEquipo = ['equipo' => $equipo];
            return view("updateTeam",$envioDatosEquipo);
        } catch(\Illuminate\Database\QueryException $ex){
            return $e;
        }
    }
    public function updateTeamDone(){
        $name= $_POST['teamName'];
        $point= $_POST['puntosEquipo'];
        $flag= $_POST['flagInsU'];
        $flag = '../img/'.$flag;
        $idConfederation= $_POST['categorieInsU'];
        try{
            \DB::insert("UPDATE Equipo SET puntos= '".$point."',bandera= '".$flag."', idConfederacion= '".$idConfederation."' WHERE nombreEquipo = '".$name."'");
            return redirect('/ranking'); 
        } catch(\Illuminate\Database\QueryException $ex){
            return $e;
        }
    }
}
