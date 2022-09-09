<?php

require_once "conexion.php";

class ModeloCursos{

    static public function index($table){

        $stmt =Conexion::conectar()->prepare("SELECT * FROM $table");

        $stmt->execute();
        return $stmt->fetchAll(PDO::FETCH_CLASS);

        $stmt->close();

        $stmt->null;
    }
}




?>