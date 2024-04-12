<?php
require_once "main_model.php";

class user_model extends main_model {
    /*------------Agregar un usuario ----------------- */
    protected static function add_user_model($datos) {
    
        /*$idrol = isset($datos['usuario_privilegio_reg']) ? $datos['usuario_privilegio_reg'] : 3;*/

        try {
            // Comenzar una transacción
            main_model::connDB()->beginTransaction();
            var_dump(self::connDB());
            // Primera consulta para insertar un usuario
            $query_user = main_model::connDB()->prepare("INSERT INTO usuarios(password, 
            nombreusuario, id_rol) VALUES (:pass, :nombreusuario, :idrol)");
            $query_user->bindParam(":pass", $datos['pass']);
            $query_user->bindParam(":nombreusuario", $datos['nombreusuario']);
            $query_user->bindParam(":idrol", $datos['$id_rol']);
            $query_user->execute();

            $query_entidad = main_model::connDB()->prepare("SELECT identidadfederativa FROM entidadfederativa WHERE 
            nombreentidad = :nombreentidad");
            $query_entidad->bindParam(":nombreentidad", $datos['estado']);
            $query_entidad->execute();
            $id_entidadfederativa = $query_entidad->fetchColumn();

            $query_municipio = main_model::connDB()->prepare("SELECT idmunicipio FROM municipio WHERE nombremunicipio = :nombremunicipio AND id_entidadfederativa = :id_entidadfederativa");
            $query_municipio->bindParam(":nombremunicipio", $datos['municipio']);
            $query_municipio->bindParam(":id_entidadfederativa", $id_entidadfederativa);
            $query_municipio->execute();
            $id_municipio = $query_municipio->fetchColumn();

            $query_colonia = main_model::connDB()->prepare("SELECT idcolonia FROM colonias WHERE nombrecolonia = :nombrecolonia AND id_municipio = :id_municipio");
            $query_colonia->bindParam(":nombrecolonia", $datos['colonia']);
            $query_colonia->bindParam(":id_municipio", $id_municipio);
            $query_colonia->execute();
            $id_colonia = $query_colonia->fetchColumn();

            $query_cp = main_model::connDB()->prepare("SELECT idcodigopostal FROM codigopostal WHERE codigopostal = :codigopostal");
            $query_cp->bindParam(":codigopostal", $datos['cp']);
            $query_cp->execute();
            $id_codigopostal = $query_cp->fetchColumn();
        
            $query_dom = main_model::connDB()->prepare("INSERT INTO domicilio(calle, numero, colonia, interior, 
            id_cp, id_colonia, id_municipio, id_entidad) VALUES (:calle, :numero, :colonia, :interior, :id_cp, 
            :id_colonia, :id_municipio, :id_entidad)");
            $query_dom->bindParam(":calle", $datos['calle']);
            $query_dom->bindParam(":numero", $datos['numero']);
            $query_dom->bindParam(":colonia", $datos['colonia']);
            $query_dom->bindParam(":interior", $datos['interior']);
            $query_dom->bindParam(":id_cp", $id_codigopostal);
            $query_dom->bindParam(":id_colonia", $id_colonia);
            $query_dom->bindParam(":id_municipio", $id_municipio);
            $query_dom->bindParam(":id_entidad", $id_entidadfederativa);
            $query_dom->execute();
            
            // Obtener el id del usuario insertado
            $id_usuario = main_model::connDB()->lastInsertId();
        
            // Segunda consulta para insertar un cliente
            $query_cliente = main_model::connDB()->prepare("INSERT INTO cliente(nombrecliente, 
            apellidopaterno, apellidomaterno, telefono, email, id_usuario, id_domicilio) 
            VALUES(:nom_cliente, :ape_paterno, :ape_materno, :telefono, :email, :idusuario, :iddomicilio)");
            $query_cliente->bindParam(":nom_cliente", $datos['nom_cliente']);
            $query_cliente->bindParam(":ape_paterno", $datos['ape_paterno']);
            $query_cliente->bindParam(":ape_materno", $datos['ape_materno']);
            $query_cliente->bindParam(":telefono", $datos['telefono']);
            $query_cliente->bindParam(":email", $datos['email']);
            $query_cliente->bindParam(":idusuario", $id_usuario); // Usar el id del usuario insertado
            $query_cliente->bindParam(":iddomicilio", $datos['id_domicilio']);
            $query_cliente->execute();
        
            // Confirmar la transacción
            main_model::connDB()->commit();
        
            return "Ambas consultas ejecutadas correctamente.";
        } catch (Exception $e) {
            // Revertir la transacción en caso de error
            main_model::connDB()->rollback();
            return "Error: " . $e->getMessage();
        }
    }
}

