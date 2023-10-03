<?php

require_once 'db.php';
function showHome(){
    include_once './templates/header.php';
    ?>
            <form action='agregar' method='POST'>
                <div class="mb-3">
                    <label for="exampleFormControlInput1" class="form-label">Titulo del recordatorio</label>
                    <input type="text" name="titulo_recordatorio" class="form-control" id="exampleFormControlInput1" placeholder="Titulo de recordatorio">
                </div>
                <div class="mb-3">
                    <label for="exampleFormControlTextarea1" class="form-label">Descripcion recordatorio</label>
                    <textarea class="form-control" name="descripcion_recordatorio" id="exampleFormControlTextarea1" rows="3" placeholder="Descripcion de recordatorio"></textarea>
                </div>
                <button class="btn btn-success">agregar</button>
            </form>

    <?php
    $recordatorios = getRecordatorios();
    foreach ($recordatorios as $recordatorio) {
        ?>
            <div class="container bg-light-subtle">
                
                <h2> titulo: <?php echo $recordatorio-> titulo_recordatorio ?> </h2>

                <p> descripcion: <?php echo $recordatorio-> descripcion_recordatorio ?> </p>
                <div class="actions">
                    <a href="delete_recordatorio/<?php echo $recordatorio-> id_recordatorio ?>" type="button" class="btn btn-danger">Eliminar</a>
                </div>

                
            </div>

        <?php
    }
    include_once './templates/footer.php';
}

function addRecordatorio(){
    
    $titulo = $_POST['titulo_recordatorio'];
    $descripcion = $_POST['descripcion_recordatorio'];
    echo "Titulo: $titulo, Descripcion: $descripcion";
    insertRecordatorio($titulo, $descripcion);
    echo "<p> Se inserto el recordatorio con exito </p>";
    header('Location: ' . BASE_URL);
}

?>
