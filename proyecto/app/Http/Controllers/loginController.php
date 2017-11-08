<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class loginController extends Controller
{
    public function welcome(){
        $username = '';
        $password = '';

        //auth
        session_start();
        $_SESSION['fullName'] = '';
        //

        $envioDatosUsername = ['username' => $username];
        $envioDatosPassword = ['password' => $password];
        return view('welcome',$envioDatosUsername,$envioDatosPassword);

    }
    public function validateUser(){
        $username = $_POST['user_name'];
        $password = $_POST['contrasenna'];
        $listaUsuarios = [];
        try{
            $listaUsuarios= \DB::select('SELECT * FROM Usuario');
        }catch(\Illuminate\Database\QueryException $ex){
            return $ex;
        }
        for ($i=0; $i < count($listaUsuarios); $i++) { 
            if($listaUsuarios[$i]->nombreUsuario == $username && $listaUsuarios[$i]->contrasenna == $password){
                session_start();
                $_SESSION['fullName'] = $listaUsuarios[$i]->nombre . " " . $listaUsuarios[$i]->apellido1 . " " .$listaUsuarios[$i]->apellido2;
                return redirect('/ranking');
            }
        }
        $envioDatosUsername = ['username' => $username];
        $envioDatosPassword = ['password' => $password];
        return view('welcome',$envioDatosUsername,$envioDatosPassword);
    }
}
