<?php

/*
        Tabla de ruteo:
        home        showHome();
        agregar     addRecordatorio();
*/
require_once './app/controllers/recordatorio.controller.php';
define('BASE_URL', '//'.$_SERVER['SERVER_NAME'] . ':' . $_SERVER['SERVER_PORT'] . dirname($_SERVER['PHP_SELF']).'/');
$action = 'home';
if (!empty($_GET['action'])) { // si viene definida la reemplazamos
    $action = $_GET['action'];
}
// parsea la accion Ej: dev/juan --> ['dev', juan]
$params = explode('/', $action);

// instancia el controller.
$controller = new RecordatorioController();
// determina que camino seguir según la acción
switch($params[0]) {
    case 'home':
        $controller->showHome();
        break;
    case 'agregar':
        $controller->addRecordatorio();
        break;
    case 'delete_recordatorio':
        $controller->removeRecordatorio($params[1]);
        break;
    case 'log_in':
        showLogIn();
        break;
    default:
        echo('404 Page not found');
        break;
}

?>

<?php
/*
require_once 'noticias.php';
require_once 'about.php';

// leemos la accion que viene por parametro
$action = 'home'; // acción por defecto

if (!empty($_GET['action'])) { // si viene definida la reemplazamos
    $action = $_GET['action'];
}

// parsea la accion Ej: dev/juan --> ['dev', juan]
$params = explode('/', $action);

// determina que camino seguir según la acción
switch ($params[0]) {
    case 'home':
        showHome();
        break;
    case 'noticia':
        showNoticia($params[1]);
        break;
    case 'about':
        $id = null;
        if (isset($params[1])) $id = $params[1];
        showAbout($id);
        break;
    default:
        echo('404 Page not found');
        break;
}
*/
?>