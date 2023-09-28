<?php

function db_conect(){
    $db = new PDO('mysql:host=localhost;dbname=recordatorio;charset=utf8', 'root', '');
}

?>