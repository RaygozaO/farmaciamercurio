<?php
require_once "../models/main_model.php";

class user_model extends main_model {
    /*------------Agregar un usuario ----------------- */
    protected static function add_user_model($datos){

        // Primera consulta para insertar un usuario
        $query_user = main_model::connDB()->prepare("INSERT INTO mercurio.usuarios(pass, 
            nombreusuario, id_rol) VALUES (:pass, :nombreusuario, :id_rol)");
        // var_dump($datos.' linea 11 user model');
        $query_user->bindParam(":pass", $datos['pass']);
        $query_user->bindParam(":nombreusuario", $datos['nombreusuario']);
        $query_user->bindParam(":id_rol", $datos['id_rol']);
        $query_user->execute();
    }
    protected static function get_entidad_model($datos):string{
        $query_entidad = main_model::connDB()->prepare("SELECT identidadfederativa FROM mercurio.entidadfederativa WHERE 
            nombreentidad = :nombreentidad");
        $query_entidad->bindParam(":nombreentidad", $datos['nombreentidad']);
        $query_entidad->execute();
        $id_entidadfederativa = $query_entidad->fetchColumn();
        return $id_entidadfederativa;
    }

    protected static function get_municipio_model($datos):string{
        $id_entidadfederativa = self::get_entidad_model();
        $query_municipio = main_model::connDB()->prepare("SELECT idmunicipio FROM municipio WHERE nombremunicipio = 
                                        :nombremunicipio AND id_entidadfederativa = :id_entidadfederativa");
        $query_municipio->bindParam(":nombremunicipio", $datos['nombremunicipio']);
        $query_municipio->bindParam(":id_entidadfederativa", $id_entidadfederativa);
        $query_municipio->execute();
        $id_municipio = $query_municipio->fetchColumn();
        return $id_municipio;
    }

    protected static function get_colonia_model($datos):string{
        $id_municipio = self::get_municipio_model();
        $query_colonia = main_model::connDB()->prepare("SELECT idcolonia FROM colonias WHERE nombrecolonia = :nombrecolonia AND id_municipio = :id_municipio");
        $query_colonia->bindParam(":nombrecolonia", $datos['nombrecolonia']);
        $query_colonia->bindParam(":id_municipio", $id_municipio);
        $query_colonia->execute();
        $id_colonia = $query_colonia->fetchColumn();
        return $id_colonia;
    }

    protected static function get_codigo_model($datos):string{
        $query_cp = main_model::connDB()->prepare("SELECT idcodigopostal FROM codigopostal WHERE codigopostal = :codigopostal");
        $query_cp->bindParam(":codigopostal", $datos['cp']);
        $query_cp->execute();
        $id_codigopostal = $query_cp->fetchColumn();
        return $id_codigopostal;
    }

    protected static function add_domicilio_model($datos){
        $query_dom = main_model::connDB()->prepare("INSERT INTO domicilio(calle, numero, colonia, interior, 
            id_cp) VALUES (:calle, :numero, :colonia, :interior, :id_cp)");
        $query_dom->bindParam(":calle", $datos['calle']);
        $query_dom->bindParam(":numero", $datos['numero']);
        $query_dom->bindParam(":colonia", $datos['colonia']);
        $query_dom->bindParam(":interior", $datos['interior']);
        $query_dom->bindParam(":id_cp", $id_codigopostal);
        $query_dom->execute();
    }

    protected static function consulta_id():string{
        // Obtener el id del usuario insertado
        $id_usuario = main_model::connDB()->lastInsertId();
        return $id_usuario;
    }
    protected static function consulta_id_dom():string{
        // Obtener el id del usuario insertado
        $id_domicilio = main_model::connDB()->lastInsertId();
        return $id_domicilio;
    }
    protected static function add_cliente_model($datos){
        $id_usuario = self::consulta_id();
        $id_domicilio = self::consulta_id_dom();
        // Segunda consulta para insertar un cliente
        $query_cliente = main_model::connDB()->prepare("INSERT INTO cliente(nombrecliente, 
            apellidopaterno, apellidomaterno, telefono, email, id_usuario, id_domicilio) 
            VALUES(:nombrecliente, :apellidopaterno, :apellidomaterno, :telefono, :email, :id_usuario, :id_domicilio)");
        $query_cliente->bindParam(":nombrecliente", $datos['nombrecliente']);
        $query_cliente->bindParam(":apellidopaterno", $datos['apellidopaterno']);
        $query_cliente->bindParam(":apellidomaterno", $datos['apellidomaterno']);
        $query_cliente->bindParam(":telefono", $datos['telefono']);
        $query_cliente->bindParam(":email", $datos['email']);
        $query_cliente->bindParam(":id_usuario", $id_usuario); // Usar el id del usuario insertado
        $query_cliente->bindParam(":id_domicilio", $id_domicilio);
        $query_cliente->execute();
    }
}

