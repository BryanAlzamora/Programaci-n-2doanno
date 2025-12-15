<?php
require_once 'database.php';

function obtenerAlumnos() {
    $db = getDbConnection();
    $sql = "SELECT * FROM alumnos";
    $stmt = $db->query($sql);
    return $stmt->fetchAll(PDO::FETCH_OBJ);
}

function obtenerAlumnoPorId($id) {
    $db = getDbConnection();
    $sql = "SELECT * FROM alumnos WHERE id = :id";
    $stmt = $db->prepare($sql);
    $stmt->execute(['id' => $id]);
    return $stmt->fetch(PDO::FETCH_OBJ);
}
