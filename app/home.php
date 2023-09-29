<?php

require_once './app/db.php';
function showHome(){
    include_once './templates/header.php';
    echo "
    
            <form action='agregar' method='POST'>
                <input type='text' name='titulo_recordatorio' placeholder='titulo del recordatorio'>
                <input type='text' name='descripcion_recordatorio' placeholder='descripcion del recordatorio'>
                <button>agregar</button>
            </form>
    ";

    $recordatorios = getRecordatorios();
    foreach ($recordatorios as $recordatorio) {
        echo $recordatorio->titulo_recordatorio;
    }
    include_once './templates/footer.php';
}

function addRecordatorio(){
    
    $titulo = $_POST['titulo_recordatorio'];
    $descripcion = $_POST['descripcion_recordatorio'];
    echo "Titulo: $titulo, Descripcion: $descripcion";
    insertRecordatorio($titulo, $descripcion);
    echo "<p> Se inserto el recordatorio con exito </p>";
}

?>
