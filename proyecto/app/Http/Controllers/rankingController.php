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
