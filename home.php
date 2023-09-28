<?php

include_once 'templates/header.php';
require_once 'db.php';
function showHome(){
    echo "
    
            <form action='agregar' method='POST'>
                <input type='text' name='titulo_recordatorio' placeholder='titulo del recordatorio'>
                <input type='text' name='descripcion_recordatorio' placeholder='descripcion del recordatorio'>
                <button>agregar</button>
            </form>

          
    ";
    include_once 'recordatorios.php';
    
   
}

function insertRecordatorio($titulo, $descripcion){
    db_conect();
    $sentencia = $db->prepare("INSERT INTO recordatorios (titulo_recordatorio, descripcion_recordatorio) VALUES (?, ?)");
    $sentencia->execute([$titulo, $descripcion]);
}

function addRecordatorio(){
    $titulo = $_POST['titulo_recordatorio'];
    $descripcion = $_POST['descripcion_recordatorio'];
    insertRecordatorio($titulo, $descripcion);
    echo "Se inserto el recordatorio con exito";
    
}
include_once 'templates/footer.php';
?>
