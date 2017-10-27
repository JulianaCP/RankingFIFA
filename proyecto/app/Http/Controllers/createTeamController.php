<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class createTeamController extends Controller
{
    public function edit($id)
    {
        $name= $_POST['nameIns'];
        $point= $_POST['pointIns'];
        $flag= $_POST['flagIns'];
        $active= 1;
        $idConfederation= $_POST['idConfederationIns'];
        try{                                    
           \DB::select('EXEC updateTeam (?,?,?,?,?)',array($name,$point,$flag,$active,$idConfederation));
            //return redirect('/mostrarhome');
        }catch(\Illuminate\Database\QueryException $ex){
            //return redirect('/mensajeError'); 
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
        $fullDir = './img/'. $flag;
        $idConfederation= $_POST['categorieIns'];
        return $fullDir;
        try{    
            \DB::insert("INSERT INTO Equipo(nombreEquipo,puntos,bandera,activado,idConfederacion) VALUES ('".$name."','".$point."','".$fullDir."','".$active."','".$idConfederation."')");                                
            return redirect('/goToMain');
        }catch(\Illuminate\Database\QueryException $ex){
            echo $ex;
        }
    }
}
