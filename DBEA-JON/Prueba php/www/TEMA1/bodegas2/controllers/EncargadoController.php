<?php
require_once __DIR__ . '/BaseController.php';
require_once __DIR__ . '/../models/EmpleadoModel.php';

class EncargadoController extends BaseController {
    
    public function index(){
        $listaEmpleados=EmpleadoModel::getAll();
        $this->render('encargado.view.php', ['listaEmpleados' => $listaEmpleados]);
    }

    public function annadirEmpleado(){
        $nombre=$_POST['nombre'];
        $apellido=$_POST['apellido'];
        $edad=$_POST['edad'];
        $cumpleanos=$_POST['cumpleanos'];
        $email=$_POST['email'];
        $sexo=$_POST['sexo'];
        $cv=$_POST['cv'];
        $dni=$_POST['dni'];

        if($dni && $nombre && $apellido && $edad && $cumpleanos && $email && $sexo && $cv){
            $datos = [
                    'dni' => $dni,
                    'nombre' => $nombre,
                    'apellido' => $apellido,
                    'edad' => $edad,
                    'cumpleanos' => $cumpleanos,
                    'email' => $email,
                    'sexo' => $sexo,
                    'cv' => $cv
                ];
                EmpleadoModel::create($datos);
                $this->redirect('index.php?controller=EncargadoController&accion=index');
            }
            else{
                echo "Algún campo estaria vacio";
            }   
    }
    
    public function validarModificar(){
        $dni=$_GET['dni'];
        $datos=EmpleadoModel::getByDni($dni);
        
        return $this->render('encargado_modificar.view.php',[
            'empleado'=>$datos
        ]);
    }
    public function modificarEmpleado(){
        $dni=$_GET['dni'];
        $nombre=$_POST['nombre'];
        $apellido=$_POST['apellido'];
        if($nombre && $apellido){
            $datos=[
                'nombre'=>$nombre,
                'apellido'=>$apellido
            ];
            EmpleadoModel::modificar($dni,$datos);
        }
        $this->redirect('index.php?controller=EncargadoController&accion=index');
    }
    public function eliminarEmpleado(){
        $dni=$_GET['dni'];
        EmpleadoModel::eliminarByDni($dni);
        $this->redirect('index.php?controller=EncargadoController&accion=index');
    }
    public function idiomaCookie(){
        $idioma=$_POST['idioma'] ?? null;
        if($idioma){
            setcookie('idioma',$idioma,time()+7*24*60*60);
        }
        $this->redirect('index.php?controller=EncargadoController&accion=index');

    }
    public function borrarCookie(){
        setcookie('idioma','',time() - 3600);
        $this->redirect('index.php?controller=EncargadoController&accion=index');
    }
}