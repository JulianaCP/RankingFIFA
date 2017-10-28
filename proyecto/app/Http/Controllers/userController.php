<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class userController extends Controller
{
    public function userRegister(){
        $name = $_POST['name'];
        $firstSurname = $_POST['firstSurname'];
        $secondSurname = $_POST['secondSurname'];
        $age = $_POST['age'];
        $username = $_POST['username'];
        $password = $_POST['password'];
        $confirmPassword = $_POST['confirmPassword'];
        if($name != '' && $username != '' && $password != '' && $confirmPassword != '' 
            && $firstSurname != '' && $secondSurname != '' && $age != ''){
            if($password==$password){
                try{
                    \DB::statement("EXEC insertUser '". $name ."','" . $firstSurname ."','" 
                        .$secondSurname ."','" .$age ."','" .$username ."','" .$password ."'");
                    session_start();
                    $_SESSION['fullName'] = $name . " " . $firstSurname . " " .$secondSurname;
                        
                    return redirect('/ranking'); 
                } catch(\Illuminate\Database\QueryException $ex){
                    return $e;
                }
            }
        }
        return redirect('/register'); 
    }
}
