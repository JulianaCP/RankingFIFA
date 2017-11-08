<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class saveGames extends Controller
{
    public function saveNewGameShow(){
        return View('saveNewGame');
    }

    public function saveNewGame(){
        session_start();
        $name= $_POST['nombre'];
        $list= $_POST['list'];
        $flag= $_POST['logo'];
        $flag = '../img/'.$flag;        
        $user= $_SESSION['fullName'];
        $today= date("d-m-y");
        $manage = (array) json_decode($list);
                
        try{
            \DB::insert("INSERT INTO guardarEquipoUsuario(nombreSorteo,nombreUsuario,logo,fecha) VALUES ('".$name."','".$user."','".$flag."','".$today."')"); 
            foreach ($manage as $manageP) {                
                try{
                    \DB::insert("INSERT INTO sorteoGuardado(nombreSorteo,posicion,nombreEquipo) VALUES ('".$name."','".$manageP->position."','".$manageP->name."')");
                    
                } catch(\Illuminate\Database\QueryException $ex){
                    return $ex;
                }
            }
            return redirect('/saveGames'); 
        }
        catch(\Illuminate\Database\QueryException $ex){
            return $ex;
        }                
    }

    public function showInfoSpecific(){
        try{
            $idEquipo= $_POST['nombre'];
            $lista= \DB::select("SELECT sorteoGuardado.posicion,Equipo.nombreEquipo,Equipo.bandera,Equipo.activado FROM sorteoGuardado inner join Equipo on(sorteoGuardado.nombreSorteo= '".$idEquipo."' and Equipo.nombreEquipo= sorteoGuardado.nombreEquipo)");
            
            $envioDatos = ['lista' => $lista];
            return View('showSaveGames', $envioDatos);
        } catch(\Illuminate\Database\QueryException $ex){
            return $e;
        } 
    }

    public function showInfo(){
        try{
            $lista= \DB::select('SELECT * from guardarEquipoUsuario');
            $envioDatos = ['lista' => $lista];
            return View('savePage', $envioDatos);
        } catch(\Illuminate\Database\QueryException $ex){
            return $e;
        }        
    }
}
