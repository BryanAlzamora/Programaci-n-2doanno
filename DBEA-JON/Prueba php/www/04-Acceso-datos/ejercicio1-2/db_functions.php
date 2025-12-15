<?php
require_once 'database.php';

function getAll() {
    $db = getDbConnection();
    $stmt = $db->prepare("SELECT * FROM items ORDER BY id DESC");
    $stmt->setFetchMode(PDO::FETCH_OBJ);
    $stmt->execute();
    return $stmt->fetchAll();
}

function insert($texto) {
    $db = getDbConnection();
    $stmt = $db->prepare("INSERT INTO items(texto) VALUES (:texto)");
    return $stmt->execute(['texto' => $texto]);
}

function deleteById($id) {
    $db = getDbConnection();
    $stmt = $db->prepare("DELETE FROM items WHERE id = :id");
    return $stmt->execute(['id' => $id]);
}

function deleteAll() {
    $db = getDbConnection();
    $stmt = $db->prepare("DELETE FROM items");
    return $stmt->execute();
}