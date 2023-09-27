<?php

$db = new PDO('mysql:host=localhost;dbname=recordatorio;charset=utf8', 'root', '');
$sentencia = $db->prepare("SELECT * FROM `recordatorios`");
$sentencia->execute();

$recordatorios = $sentencia->fetchAll(PDO::FETCH_OBJ);

foreach ($recordatorios as $recordatorio) {
    echo $recordatorio->titulo_recordatorio;
}

?>