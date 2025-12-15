<?php
require_once __DIR__ . '/BaseController.php';
require_once __DIR__ . '/../models/Torneo.php';

class TorneoController extends BaseController {
    
    public function index() {
        $torneos = Torneo::getAll();
        
        $this->render('torneos/index', [
            'torneos' => $torneos
        ]);
    }
    
    public function show() {
        $id = $_GET['id'] ?? null;
        
        if (!$id) {
            $this->redirect('index.php');
        }
        
        $torneo = Torneo::findById($id);
        
        if (!$torneo) {
            $this->redirect('index.php');
        }
        
        $this->render('torneos/show', [
            'torneo' => $torneo
        ]);
    }
    
    public function create() {
        // Es opcional, revisar si se quiere proteger esta acción (no se pide a los estudiantes)
        $this->requireAuth();
        
        $this->render('torneos/create');
    }
    
    public function store() {
        // Es opcional, revisar si se quiere proteger esta acción (no se pide a los estudiantes)
        $this->requireAuth();
        
        $data = [
            'titulo' => $_POST['titulo'] ?? '',
            'juego' => $_POST['juego'] ?? '',
            'descripcion' => $_POST['descripcion'] ?? '',
            'fecha' => $_POST['fecha'] ?? '',
            'plazas_totales' => (int)($_POST['plazas_totales'] ?? 0)
        ];
        
        // Crear torneo (incluye validaciones)
        $result = Torneo::create($data);
        
        // Torneo creado exitosamente
        $this->redirect('index.php');
    }
    
    public function cambiarEstado() {
        // Es opcional, revisar si se quiere proteger esta acción (no se pide a los estudiantes)
        $this->requireAuth();
        
        $torneoId = $_GET['id'] ?? null;
        
        // Validar ID (opcional)
        if (!$torneoId) {
            $this->redirect('index.php');
        }
        
        // Obtener el torneo actual
        $torneo = Torneo::findById($torneoId);
        
        if (!$torneo) {
            $this->redirect('index.php');
        }
        
        // Cambiar el estado
        $nuevoEstado = ($torneo->estado === 'abierto') ? 'cerrado' : 'abierto';
        
        Torneo::cambiarEstado($torneoId, $nuevoEstado);
        
        $this->redirect('index.php');
    }
    
    public function delete() {
        // Es opcional, revisar si se quiere proteger esta acción (no se pide a los estudiantes)
        $this->requireAuth();
        
        $torneoId = $_GET['id'] ?? null;
        
        // Es opcional validar si el torneo existe antes de eliminar
        if (!$torneoId) {
            $this->redirect('index.php');
        }
        
        Torneo::delete($torneoId);
        
        $this->redirect('index.php');
    }
}
