
<?php

    class ControladorCursos{

        public function index(){

        $cursos=ModeloCursos::index("cursos");

                $json = array(
                    "detalle"=>$cursos);
            echo json_encode($json, true);

        }

        public function  create(){
            $json = array(
                "detalle"=>"estas en la vista crear"
            );
            echo json_encode($json, true);

        }
        public function  show($id){
            $json = array(
                "detalle"=>"este es el curso con el id...".$id
            );
            echo json_encode($json, true);

        }

        public function  update($id){
            $json = array(
                "detalle"=>"el curso ...".$id." ha sisdo actualizado correctamente"
            );
            echo json_encode($json, true);

        }

        public function  delete($id){
            $json = array(
                "detalle"=>"el curso ...".$id." ha sisdo borrado correctamente"
            );
            echo json_encode($json, true);

        }
    }
    ?>