<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class userController extends Controller
{
    public function userRegister(){
        $fullName = $_POST['fullName'];
        $username = $_POST['user_name'];
        $password = $_POST['password'];
        $confirmPassword = $_POST['confirmPassword'];
        if($fullName != '' && $username != '' && $password != '' && $confirmPassword != ''){
            if($password==$password){
                try{
                    \DB::insert("INSERT INTO Usuario(nombreUsuario, nombreCompleto,contrasenna) VALUES ('".$username."','".$fullName."','".$password."')");                                
                    return redirect('/'); 
                } catch(\Illuminate\Database\QueryException $ex){
                    return $e;
                }
            }
        }
        return redirect('/register'); 
    }
}
