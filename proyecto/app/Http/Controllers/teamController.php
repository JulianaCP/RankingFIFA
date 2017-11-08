<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class teamController extends Controller
{
    //READ
    public function index()
    {
        try{
            $listaEquipos= \DB::select('SELECT * FROM Equipo AS e inner join Confederacion AS c ON(e.idConfederacion=c.id) ORDER BY puntos DESC');
            $envioDatosEquipo = ['listaEquipos' => $listaEquipos];
            return View('ranking', $envioDatosEquipo);
        } catch(\Illuminate\Database\QueryException $ex){
            return $ex;
        }
    }
    //ENABLE
    public function enableTeam()
    {
        $nombreEquipo = $_POST['id'];
        \DB::statement("EXEC changeEnableAttributeTeam '" . $nombreEquipo . "'");
    }


    //CREATE
    public function createTeam(){
        try{
            $listConfederations= \DB::select("SELECT * FROM Confederacion");
            $envioDatoslistConfederations = ['listConfederations' => $listConfederations];
            return view('createTeam',$envioDatoslistConfederations);
        }catch(\Illuminate\Database\QueryException $ex){
            return $ex;
        }

    }
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
            return $ex;
        }
    }

    //UPDATE
    public function updateTeam($idEquipo){
        
        try{
            $equipo= \DB::select("SELECT * FROM Equipo where nombreEquipo='".$idEquipo."'");
            $listConfederations= \DB::select("SELECT * FROM Confederacion");
            $envioDatosEquipo = ['equipo' => $equipo];
            $envioDatoslistConfederations = ['listConfederations' => $listConfederations];
            return view("updateTeam",$envioDatosEquipo,$envioDatoslistConfederations);
        } catch(\Illuminate\Database\QueryException $ex){
            return $ex;
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
            return $ex;
        }
    }
}
