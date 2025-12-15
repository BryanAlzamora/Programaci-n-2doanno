<?php
require_once __DIR__ . '/BaseController.php';
require_once __DIR__ . '/../models/SesionModel.php';

class SesionController extends BaseController {
    
    public function index(){
        global $users;

        $user=$_POST['user'] ?? null;
        $pwd=$_POST['pwd'] ?? null;

        $validar=SesionModel::validarSesion($users,$user,$pwd);

         if($validar===true){
            SesionModel::iniciarSession($user);

            $usuario=SesionModel::userActual($users);

            if($usuario['rol']=='Administrador'){
                $this->redirect('index.php?controller=AdministradorController&accion=index');
            }elseif($usuario['rol']=='Encargado'){
                $this->redirect('index.php?controller=EncargadoController&accion=index');
            }
         }else{
            $this->render('index.view.php');
         }

    }
}