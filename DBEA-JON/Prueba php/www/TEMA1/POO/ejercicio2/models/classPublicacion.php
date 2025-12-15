<?php
namespace ejercicio2\models;

class Publicacion{
    private string $autores;
    private int $anno;
    private string $editorial;
    private string $titulo;
    private string $texto;

    public function __construct($autores,$anno,$editorial,$titulo,$texto){
        $this->autores=$autores;
        $this->anno=$anno;
        $this->editorial=$editorial;
        $this->titulo=$titulo;
        $this->texto=$texto;
    }
    public function leer(){
        return $this->texto;
    }
    public function escribir($nuevoTexto){
        return $this->texto .= ' '.$nuevoTexto;
    }
}


?>