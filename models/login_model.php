<?php
    require_once "./models/main_model.php";

    class login_model extends main_model{
        /*------------ Modelo de login -----------*/
        protected static function sesion_model($datos)
        {
            $sql = main_model::connDB()->prepare("SELECT * FROM mercurio.usuarios WHERE usuarios.nombreusuario = :nombreusuario
                AND usuarios.pass = :pass AND usuarios.enabled = 1");
            $sql->bindParam(":nombreusuario", $datos['nombreusuario']);
            $sql->bindParam(":pass", $datos['pass']);
            $sql->execute();
            return $sql;
        }

    }