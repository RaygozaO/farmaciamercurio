<?php
    require_once "mainModel.php";
    class usuarioModel extends mainModel{
        /*------------- Modelo para agregar usuario -------------*/

        // Función para obtener los datos del domicilio según el código postal
        protected function add_usuario_model($data)
        {
            try {
                // Parte 1: Obtener los datos del domicilio
                $query = mainModel::conectar()->prepare("SELECT cp.codigopostal, cp.idcodigopostal, col.nombrecolonia,
            col.idcolonia, mun.nombremunicipio AS Municipio, mun.idmunicipio, ent.identidadfederativa, ent.nombreentidad AS EntidadFederativa
            FROM codigopostal cp 
            JOIN colonias col ON cp.idcodigopostal = col.id_codigopostal 
            JOIN municipio mun ON col.id_municipio = mun.idmunicipio
            JOIN entidadfederativa ent ON mun.id_entidadfederativa = ent.identidadfederativa 
            WHERE cp.codigopostal = :CP");
                $query->bindParam(":CP", $data['codigopostal']);
                $query->execute();
                $datos = $query->fetchAll(PDO::FETCH_ASSOC);

                if (empty($datos)) {
                    return null;
                }

                // Seleccionar la colonia específica
                $coloniaEncontrada = null;
                foreach ($datos as $domicilio) {
                    if ($domicilio['nombrecolonia'] === $data['colonia']) {
                        $coloniaEncontrada = $domicilio;
                        break;
                    }
                }

                if (!$coloniaEncontrada) {
                    return null;
                }

                $conexion = mainModel::conectar();

                // Parte 1: Insertar datos en la tabla domicilio
                $sql = $conexion->prepare("INSERT INTO domicilio (calle, numero, interior, id_cp, id_colonia, id_municipio, id_entidad) 
        VALUES (:CALLE, :NUMERO, :INTERIOR, :IDCP, :IDCOLONIA, :IDMUNICIPIO, :IDENTIDAD)");
                $sql->bindParam(":CALLE", $data['calle']);
                $sql->bindParam(":NUMERO", $data['numero']);
                $sql->bindParam(":INTERIOR", $data['interior']);
                $sql->bindParam(":IDCP", $coloniaEncontrada['idcodigopostal']);
                $sql->bindParam(":IDCOLONIA", $coloniaEncontrada['idcolonia']);
                $sql->bindParam(":IDMUNICIPIO", $coloniaEncontrada['idmunicipio']);
                $sql->bindParam(":IDENTIDAD", $coloniaEncontrada['identidadfederativa']);

                // Ejecutar la inserción y verificar si fue exitosa
                if (!$sql->execute()) {
                    throw new Exception("Error al insertar en la tabla domicilio: " . implode(", ", $sql->errorInfo()));
                }

                // Obtener el ID del domicilio recién insertado
                $idDomicilio = $conexion->lastInsertId();
                if ($idDomicilio == 0) {
                    throw new Exception("No se pudo obtener el ID del domicilio.");
                }

                // Parte 2: Insertar datos en la tabla usuarios
                $sqlUsr = $conexion->prepare("INSERT INTO usuarios(pass, nombreusuario, email, enabled, id_rol)
        VALUES(:PASS, :Nombre, :Email, :Enabled, :Rol)");
                $sqlUsr->bindParam(":PASS", $data['password']);
                $sqlUsr->bindParam(":Nombre", $data['nombreUsuario']);
                $sqlUsr->bindParam(":Email", $data['email']);
                $sqlUsr->bindParam(":Enabled", $data['enabled']);
                $sqlUsr->bindParam(":Rol", $data['rol']);

                // Ejecutar la inserción y verificar si fue exitosa
                if (!$sqlUsr->execute()) {
                    throw new Exception("Error al insertar en la tabla usuarios: " . implode(", ", $sqlUsr->errorInfo()));
                }

                // Obtener el ID del usuario recién insertado
                $idUsuario = $conexion->lastInsertId();
                if ($idUsuario == 0) {
                    throw new Exception("No se pudo obtener el ID del usuario.");
                }

                // Parte 3: Insertar datos en la tabla cliente
                $sqlCliente = $conexion->prepare("INSERT INTO cliente(nombrecliente, apellidopaterno, apellidomaterno, telefono, id_usuario, id_domicilio) 
        VALUES(:NOMBRECLIENTE, :APPATERNO, :APMATERNO, :TELEFONO, :ID_USUARIO, :ID_DOMICILIO)");
                $sqlCliente->bindParam(":NOMBRECLIENTE", $data['nombrecliente']);
                $sqlCliente->bindParam(":APPATERNO", $data['appaterno']);
                $sqlCliente->bindParam(":APMATERNO", $data['apmaterno']);
                $sqlCliente->bindParam(":TELEFONO", $data['telefono']);
                $sqlCliente->bindParam(":ID_USUARIO", $idUsuario);
                $sqlCliente->bindParam(":ID_DOMICILIO", $idDomicilio);

                // Ejecutar la inserción y verificar si fue exitosa
                if (!$sqlCliente->execute()) {
                    throw new Exception("Error al insertar en la tabla cliente: " . implode(", ", $sqlCliente->errorInfo()));
                }

                return $sqlCliente;

            } catch (PDOException $e) {
                echo "Error en la consulta: " . $e->getMessage();
                return null;
            }
        }

    }