<?php
require_once "../models/main_model.php";

class user_model extends main_model {
    /*------------Agregar un usuario ----------------- */
    protected static function add_user_model($datos){

        // Primera consulta para insertar un usuario
        $query_user = main_model::connDB()->prepare("INSERT INTO mercurio.usuarios(pass, 
            nombreusuario, id_rol,enabled,calle,numero,colonia,interior,codigopostal,municipio,estado,
                              nombrecliente,nombre2,apellidopaterno,apellidomaterno,telefono,email) VALUES 
            (:pass, :nombreusuario, :id_rol,:enabled,:calle,:numero,:colonia,:interior,:codigopostal,:municipio,:estado,
             :nombrecliente,:nombre2,:apellidopaterno,:apellidomaterno,:telefono,:email)");
        $activo = true;
        $query_user->bindParam(":pass", $datos['pass']);
        $query_user->bindParam(":nombreusuario", $datos['nombreusuario']);
        $query_user->bindParam(":id_rol", $datos['id_rol']);
        $query_user->bindParam(":enabled", $activo);

        $query_user->bindParam(":calle", $datos['calle']);
        $query_user->bindParam(":numero", $datos['numero']);
        $query_user->bindParam(":colonia", $datos['colonia']);
        $query_user->bindParam(":interior", $datos['interior']);
        $query_user->bindParam(":codigopostal", $datos['codigopostal']);
        $query_user->bindParam(":municipio", $datos['municipio']);
        $query_user->bindParam(":estado", $datos['estado']);

        $query_user->bindParam(":nombrecliente", $datos['nombrecliente']);
        $query_user->bindParam(":nombre2", $datos['nombre2']);
        $query_user->bindParam(":apellidopaterno", $datos['apellidopaterno']);
        $query_user->bindParam(":apellidomaterno", $datos['apellidomaterno']);
        $query_user->bindParam(":telefono", $datos['telefono']);
        $query_user->bindParam(":email", $datos['email']);
        $query_user->execute();
    }

}

