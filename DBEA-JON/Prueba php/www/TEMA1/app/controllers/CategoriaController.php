<?php
require_once __DIR__ . '/BaseController.php';
require_once __DIR__ . '/../models/CategoriaModel.php';

class CategoriaController extends BaseController {
    
    public function index() {
        session_start(); 
        $listaCategorias = CategoriaModel::getAll();
        $listaAnuncios = AnuncioModel::getAll();

        // Header según tipo de usuario
        $header = 'headerSinSession.php';
        if (isset($_SESSION['user'])) {
            if ($_SESSION['user']['tipo'] === 'comprador') {
                $header = 'headerSessionComprador.php';
            } elseif ($_SESSION['user']['tipo'] === 'vendedor') {
                $header = 'headerSessionVendedor.php';
            }
        }

        $this ->render('anuncio.view.php',[
            'listaCategorias' => $listaCategorias,
            'listaAnuncios' => $listaAnuncios,
            'header' => $header
        ]);   
    }

    public function getAll(){
        $listaCategoria = CategoriaModel::getAll();
        $this -> render('anuncio.view.php',['listaCategorias' => $listaCategorias]);
    }
    

}
