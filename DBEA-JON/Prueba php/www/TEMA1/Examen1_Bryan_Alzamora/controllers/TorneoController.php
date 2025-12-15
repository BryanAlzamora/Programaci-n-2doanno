<?php
require_once __DIR__ . '/BaseController.php';
require_once __DIR__ . '/../models/TorneoModel.php';

class TorneoController extends BaseController {
    
    public function index() {
    
        $listaTorneos=TorneoModel::getAll();
       
    
        $this->render('index.view',[
            'listaTorneos' => $listaTorneos,
            
        ]);
    }
    
    public function crearTorneo(){
        $titulo=$_POST['titulo']; 
        $juego=$_POST['juego'];  
        $descripcion=$_POST['descripcion'];  
        $fecha=$_POST['fecha'];  
        $plazas=$_POST['plazas'];  
        
        
        if($titulo && $juego && $descripcion && $fecha && $plazas){
            $datos=[
                'titulo' => $titulo,
                'juego' => $juego,
                'descripcion' => $descripcion,
                'fecha' => $fecha,
                'plazas' => $plazas

            ];
            TorneoModel::create($datos);
            
            $listaTorneos=TorneoModel::getAll();

             $this->render('index.view',[
            'listaTorneos'=>$listaTorneos
        ]);
        }else{
            echo "Datos incorrectos";
        }

    }
    public function modificarEstado(){
        $id=$_POST['id'];
        $estado=$_POST['estado'];
        TorneoController::modificarEstado($id,$estado);
    }
    public function deleteById(){
        $id=$_GET['id'];
        TorneoModel::deleteById($id);
        $listaTorneos=TorneoModel::getAll();
        $this->render('index.view',[
            'listaTorneos'=>$listaTorneos
        ]);
    }
    public function getById(){
        $id=$_GET['id'];
        $datos=TorneoModel::getById($id);
        $this->render('detalles.view',[
            'torneo'=>$datos
        ]);
    }
    
}