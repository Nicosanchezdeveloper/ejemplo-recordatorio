<?php

class RecordatorioModel{
    private $db;

    public function __construct(){
        $this->db = new PDO('mysql:host=localhost;dbname=recordatorio;charset=utf8', 'root', '');
    }

    
    public function insertRecordatorio($titulo, $descripcion){

        $sentencia = $this->db->prepare("INSERT INTO recordatorios (titulo_recordatorio, descripcion_recordatorio) VALUES (?, ?)");
        $sentencia->execute([$titulo, $descripcion]);
    }

    public function getRecordatorios(){

        $sentencia = $this->db->prepare("SELECT * FROM recordatorios");
        $sentencia->execute();
        
        $recordatorios = $sentencia->fetchAll(PDO::FETCH_OBJ);
        
        return $recordatorios;
    }

    public function deleteRecordatorio($id){

        $sentencia = $this->db->prepare("DELETE FROM recordatorios WHERE id_recordatorio = ?");
        $sentencia->execute([$id]);

    }
  

    
}

?>