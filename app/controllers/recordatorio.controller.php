<?php
require_once './app/models/recordatorio.model.php';
require_once './app/views/recordatorio.view.php';

class RecordatorioController {
    private $model;
    private $view;

    public function __contruct(){
        $this->model = new RecordatorioModel();
        $this->view = new RecordatorioView();
    }

    public function showHome(){
        $recordatorio = $this->model->getRecordatorios();
        $this->view->showHome($recordatorio);
    }

    public function addRecordatorio(){
    
        $titulo = $_POST['titulo_recordatorio'];
        $descripcion = $_POST['descripcion_recordatorio'];
        echo "Titulo: $titulo, Descripcion: $descripcion";
        insertRecordatorio($titulo, $descripcion);
        echo "<p> Se inserto el recordatorio con exito </p>";
        header('Location: ' . BASE_URL);
    }

}




?>