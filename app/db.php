<?php

function db_conect(){
    return new PDO('mysql:host=localhost;dbname=recordatorio;charset=utf8', 'root', '');
}

function insertRecordatorio($titulo, $descripcion){
    $db = db_conect();
    $sentencia = $db->prepare("INSERT INTO recordatorios (titulo_recordatorio, descripcion_recordatorio) VALUES (?, ?)");
    $sentencia->execute([$titulo, $descripcion]);
}

function  getRecordatorios(){
    $db = db_conect();
    $sentencia = $db->prepare("SELECT * FROM `recordatorios`");
    $sentencia->execute();
    
    $recordatorios = $sentencia->fetchAll(PDO::FETCH_OBJ);
    
    return $recordatorios;
}

?>