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
<<<<<<< HEAD
           \DB::select("UPDATE Equipo SET puntos= '".$point."',bandera= '".$flag."',activado= '".$active."', idConfederacion= '".$idConfederation."' WHERE nombre = @nombreP");
            return redirect('/goToMain');
=======
           \DB::select('EXEC updateTeam (?,?,?,?,?)',array($name,$point,$flag,$active,$idConfederation));
            //return redirect('/mostrarhome');
>>>>>>> origin/master
        }catch(\Illuminate\Database\QueryException $ex){
            echo $ex;
        }
    }

    public function show(){
    	return View('createView');
    }

    public function create()
    {        
        $name= $_POST['nameIns'];
        $point= $_POST['pointIns'];
        $flag= $_POST['flagIns'];
        $active= 1;
        $idConfederation= $_POST['categorieIns'];
        
<<<<<<< HEAD
        try{          	                                  
           	\DB::insert("INSERT INTO Equipo(nombreEquipo,puntos,bandera,activado,idConfederacion) VALUES ('".$name."','".$point."','".$flag."','".$active."','".$idConfederation."')");

=======
        try{    
            \DB::insert("INSERT INTO Equipo(nombreEquipo,puntos,bandera,activado,idConfederacion) VALUES ('".$name."','".$point."','".$flag."','".$active."','".$idConfederation."')");                                
>>>>>>> origin/master
            return redirect('/goToMain');
        }catch(\Illuminate\Database\QueryException $ex){
            echo $ex;
        }
    }
}
