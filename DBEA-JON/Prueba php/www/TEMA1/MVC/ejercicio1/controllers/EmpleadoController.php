<?php
require_once __DIR__ './BaseController.php';
require_once __DIR__ '../controllers/EmpleadoModel.php';

class EmpleadoController extends BaseController{

    public function create(){
        $empleado=array(
            'dni'=>$_POST['dni'],
            'nombre'=>$_POST['nombre'],
            'apellido'=>$_POST['apellido'],
            'edad'=>$_POST['edad'],
            'cumpleanos'=>$_POST['cumpleanos'],
            'email'=>$_POST['email'],
            'sexo'=>$_POST['sexo'],
            'cv'=>$_POST['cv']
        );
        EmpleadoModel::create($empleado);
        $this -> redirect('index.php');
    }

    public function deleteById(){
        $dni=$_POST['dni'];
        EmpleadoModel::deleteById($dni);
        $this->redirect('index.php');
    }

    public function deleteAll(){
        EmpleadoModel::deleteAll();
        
    }
}