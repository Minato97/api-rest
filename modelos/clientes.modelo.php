<?php

require_once "conexion.php";


class ModeloClientes{

    static public function index($table){

        $stmt =Conexion::conectar()->prepare("SELECT * FROM $table");

        $stmt->execute();
        return $stmt->fetchAll();

        $stmt->close();

        $stmt->null;

    }
}


?>