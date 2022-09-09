<?php

class ControladorClientes{

    public function create($datos){

//        echo "<pre>";
//                print_r($datos);
//                echo "<pre>";

        if(isset($datos["nombre"]) && !preg_match('/^[a-zA-ZáéíóúÁÉÍÓÚñÑ ]+$/', $datos["nombre"])){

            $json = array(
            "status"=>404,
            "detalle"=>"error en el campo del nombre permitido solo letras"
        );
        echo json_encode($json, true);
        return;


        }

        if(isset($datos["apellido"]) && !preg_match('/^[a-zA-ZáéíóúÁÉÍÓÚñÑ ]+$/', $datos["apellido"])){

            $json = array(
                "status"=>404,
                "detalle"=>"error en el campo del apellido permitido solo letras"
            );
            echo json_encode($json, true);
            return;


        }

        if(isset($datos["email"]) && !preg_match('/^[^0-9][a-zA-Z0-9_]+([.][a-zA-Z0-9_]+)*[@][a-zA-Z0-9_]+([.][a-zA-Z0-9_]+)*[.][a-zA-Z]{2,4}$/', $datos["email"])){

            $json = array(
                "status"=>404,
                "detalle"=>"error en el campo del email debe tener un formato valido"
            );
            echo json_encode($json, true);
            return;


        }
        $clientes = ModeloClientes::index("clientes");

        foreach ($clientes as $key => $value){

            if($value["email"] == $datos["email"]){
                $json = array(
                    "status"=>404,
                    "detalle"=>"el email esta repetido"
                );

            }
        }
        echo json_encode($json, true);
        return;
    }
}
?>