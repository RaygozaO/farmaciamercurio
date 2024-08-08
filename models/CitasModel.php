<?php
    require_once "mainModel.php";

    class CitasModel extends mainModel{

        protected function add_citas_model($data){
            try {
                $query = mainModel::conectar()->prepare("SELECT title,start,horacita,end,color FROM citas");
                $query->bindParam(":Usuario", $data['usuario']);
                $query->execute();
                $datos = $query->fetchAll(PDO::FETCH_ASSOC);
                if(empty($datos)){
                    return null;
                }
                echo json_encode($datos);
            }catch(Exception $e){
                echo "Error en la consulta: " . $e->getMessage();
                return null;
            }
        }

    }
