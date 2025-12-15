<?php
session_start();

$users=array(
            "user1"=>array(
                'nombre'=>'Juan',
                'apellido'=>'Chavez',
                'rol' => 'Administrador',
                'pwd' => '123'
            ),
            "user2"=>array(
                'nombre'=>'Peke',
                'apellido'=>'Le petit',
                'rol'=> 'Encargado',
                'pwd'=>'321'
            )
        );

class SesionModel{

     static function validarSesion($users,$user,$pwd){
        if(!isset($users[$user])){
            return false;
        }
        if($users[$user]['pwd'] !== $pwd){
            return false;
        }
        return true;
    }
    static function iniciarSession($user){
        $_SESSION['user']=$user;
    }
    static function cerrarSession(){
        session_unset();
        session_destroy();
    }
    static function userActual($users){
        if(isset($_SESSION['user'])){
            $user = $_SESSION['user'];
            return $users[$user];
        }
        return null;
    }
    
}
?>