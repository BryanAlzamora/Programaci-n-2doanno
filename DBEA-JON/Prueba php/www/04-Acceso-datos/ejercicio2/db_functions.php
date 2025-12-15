<?php
require_once "database.php";

function getAll(){
    $db = getDbConnection();
    $stmt = $db->prepare("SELECT * FROM empleado");
    $stmt->setFetchMode(PDO::FETCH_OBJ);
    $stmt->execute();

    return $stmt->fetchAll();
}

function getById($id){
    $db = getDbConnection();
    $stmt = $db->prepare("SELECT * FROM empleado WHERE id = :id");
    $stmt->setFetchMode(PDO::FETCH_OBJ);
    $data = array(
        "id" => $id
    );
    $stmt->execute($data);
    return $stmt->fetchObject();
}

function insert($empleado){
    $db = getDbConnection();
    $stmt = $db->prepare("INSERT INTO empleado (nombre, apellidos, email, dni, sexo, edad, fecha_nacimiento, curriculum)
                            VALUES (:nombre, :apellidos, :email, :dni, :sexo, :edad, :fecha_nacimiento, :curriculum)");
    $stmt->execute($empleado);
}

function deleteById($id){
    $db = getDbConnection();
    $data = array(
        'id' => $id
    );
    $stmt = $db->prepare("DELETE FROM empleado WHERE id = :id");
    $stmt->execute($data);
}

function deleteAll(){
    $db = getDbConnection();
    $stmt = $db->prepare("DELETE FROM empleado");
    $stmt->execute();
}
