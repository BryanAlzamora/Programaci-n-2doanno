<?php
require_once __DIR__ . '/BaseController.php';
require_once __DIR__ . '/../config/users.php';
require_once __DIR__ . '/../models/SesionModel.php';


class HeaderController extends BaseController {
    
    public function index(){
        global $users;
        $user=SesionModel::userActual($users);
        if(!$user){
            $this->redirect('index.php?controller=SesionController&accion=index');
        }
        $this->render('layout/head.php',[
            'nombre' => $user['nombre'],
            'rol' => $user['rol']
        ]);
    }
}