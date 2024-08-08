<?php
    require_once "mainModel.php";

    class loginModelo extends mainModel{
        /* -------------- Modelos para inciar session ------*/
        protected static function inciarSesion($data) {
            try {
                $conn = mainModel::conectar();
                $sql = $conn->prepare("SELECT us.pass, us.nombreusuario, us.id_rol, cli.nombrecliente, cli.apellidopaterno,
                                us.enabled = 1
                               FROM usuarios us 
                               JOIN mercurio.cliente cli ON us.idusuario = cli.id_usuario 
                               WHERE us.nombreusuario = :Usuario AND us.pass = :Password");
                $sql->bindParam(":Usuario", $data['usuario']);
                $sql->bindParam(":Password", $data['password']);
                $sql->execute();
                return $sql;
            } catch (PDOException $e) {
                // Aquí puedes manejar el error, por ejemplo, registrarlo o enviarlo a la salida
                error_log("Error al ejecutar la consulta: " . $e->getMessage());
                return false; // O lanza una excepción, dependiendo de cómo desees manejar el error
            }
        }


    }
