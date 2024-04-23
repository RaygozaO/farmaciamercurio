<?php
global $peticionAjax;
if($peticionAjax){
        require_once "../models/user_model.php";
    }else{
        require_once "../models/user_model.php";
    }

class user_controller extends user_model
{
    function add_user_controller(): void{
        $nombreusuario = main_model::clean_chains($_POST["nombreusuario"]);
        $pass = main_model::clean_chains($_POST['pass']);
        $pass2 = main_model::clean_chains($_POST['pass2']);
        $id_rol = main_model::clean_chains($_POST['id_rol'] ?? 3);
        $nombrecliente = main_model::clean_chains($_POST['nombrecliente']);
        $apellidopaterno = main_model::clean_chains($_POST['apellidopaterno']);
        $apellidomaterno = main_model::clean_chains($_POST['apellidomaterno']);
        $telefono = main_model::clean_chains($_POST['telefono']);
        $email = main_model::clean_chains($_POST['email']);
        $calle = main_model::clean_chains($_POST['calle']);
        $numero = main_model::clean_chains($_POST['numero']);
        $interior = main_model::clean_chains($_POST['interior']);
        $codigopostal = main_model::clean_chains($_POST['codigopostal']);
        $colonia = main_model::clean_chains($_POST['colonia']);
        $municipio = main_model::clean_chains($_POST['municipio']);
        $estado = main_model::clean_chains($_POST['estado']);

        if ($nombreusuario == "") {
            //var_dump($nom_usuario_reg.'line 31 CONTROLLER');
            $alerta = [
                "Alerta" => "simple",
                "Titulo" => "Precaución !!",
                "Texto" => "No has ingresado todos los datos",
                "Tipo" => "warning"
            ];
            echo json_encode($alerta);
            exit();
        }

        if ($pass != $pass2) {
            $alert_pass = [
                "Alerta" => "simple",
                "Titulo" => "Error",
                "Texto" => "Contraseñas no coinciden",
                "Tipo" => "error"
            ];
            echo json_encode($alert_pass);
            exit();
        } else {
            $clave = main_model::encryption($pass);
        }

        if (main_model::validate_datos("[a-zA-Z0-9]{5,20}", $nombreusuario)) {
            $alerta = [
                "Alerta" => "simple",
                "Titulo" => "Error",
                "Texto" => "El Usuario no cumple con el formato requerido",
                "Tipo" => "error"
            ];
            echo json_encode($alerta);
            exit();
        }
        if (main_model::validate_datos("[a-zA-ZáéíóúÁÉÍÓÚñÑ ]{4,35}", $nombrecliente)) {
            $alerta = [
                "Alerta" => "simple",
                "Titulo" => "Error",
                "Texto" => "El Nombre no cumple con el formato requerido",
                "Tipo" => "error"
            ];
            echo json_encode($alerta);
            exit();
        }
        if (main_model::validate_datos("[a-zA-ZáéíóúÁÉÍÓÚñÑ ]{4,35}", $apellidopaterno)) {
            $alerta = [
                "Alerta" => "simple",
                "Titulo" => "Error",
                "Texto" => "El Apellido Paterno, no cumple con el formato requerido",
                "Tipo" => "error"
            ];
            echo json_encode($alerta);
            exit();
        }
        if (main_model::validate_datos("[a-zA-ZáéíóúÁÉÍÓÚñÑ ]{4,35}", $apellidomaterno)) {
            $alerta = [
                "Alerta" => "simple",
                "Titulo" => "Error",
                "Texto" => "El Apellido Materno, no cumple con el formato requerido",
                "Tipo" => "error"
            ];
            echo json_encode($alerta);
            exit();
        }
        if ($telefono == "(+52)") {
            $alerta = [
                "Alerta" => "simple",
                "Titulo" => "Error",
                "Texto" => "No has ingresado un telefono",
                "Tipo" => "error"
            ];
            echo json_encode($alerta);
            exit();
        }
        if (main_model::validate_datos("[a-zA-ZáéíóúÁÉÍÓÚñÑ0-9\-. ]{5,40}", $calle)) {
            $alerta = [
                "Alerta" => "simple",
                "Titulo" => "Error",
                "Texto" => "La Calle, no cumple con el formato requerido",
                "Tipo" => "error"
            ];
            echo json_encode($alerta);
            exit();
        }
        if (main_model::validate_datos("[a-zA-ZáéíóúÁÉÍÓÚñÑ0-9\-.]{1,40}", $numero)) {
            $alerta = [
                "Alerta" => "simple",
                "Titulo" => "Error",
                "Texto" => "El Numero, no cumple con el formato requerido",
                "Tipo" => "error"
            ];
            echo json_encode($alerta);
            exit();
        }
        if (main_model::validate_datos("[a-zA-ZáéíóúÁÉÍÓÚñÑ0-9\-.]{1,40}", $interior)) {
            $alerta = [
                "Alerta" => "simple",
                "Titulo" => "Error",
                "Texto" => "El Numero Interior, no cumple con el formato requerido",
                "Tipo" => "error"
            ];
            echo json_encode($alerta);
            exit();
        }
        if (main_model::validate_datos("\d{5}", $codigopostal)) {
            $alerta = [
                "Alerta" => "simple",
                "Titulo" => "Error",
                "Texto" => "El Codigo Postal, no cumple con el formato requerido",
                "Tipo" => "error"
            ];
            echo json_encode($alerta);
            exit();
        }
        if (main_model::validate_datos("[0-9a-zA-ZáéíóúÁÉÍÓÚñÑ ]{5,40}", $colonia)) {
            $alerta = [
                "Alerta" => "simple",
                "Titulo" => "Error",
                "Texto" => "La Colonia, no cumple con el formato requerido",
                "Tipo" => "warning"
            ];
            echo json_encode($alerta);
            exit();
        }
        if (main_model::validate_datos("[a-zA-ZáéíóúÁÉÍÓÚñÑ ]{5,40}", $municipio)) {
            $alerta = [
                "Alerta" => "simple",
                "Titulo" => "Error",
                "Texto" => "El Municipio, no cumple con el formato requerido",
                "Tipo" => "error"
            ];
            echo json_encode($alerta);
            exit();
        }
        if (main_model::validate_datos("[a-zA-ZáéíóúÁÉÍÓÚñÑ ]{5,40}", $estado)) {
            $alerta = [
                "Alerta" => "simple",
                "Titulo" => "Error",
                "Texto" => "El Estado, no cumple con el formato requerido",
                "Tipo" => "error"
            ];
            echo json_encode($alerta);
            exit();
        }

        $check_user = main_model::consulta_simple("SELECT usuarios.nombreusuario FROM mercurio.usuarios WHERE 
                                    nombreusuario = '$nombreusuario'");
        if ($check_user->rowCount() > 0) {
            $alerta = [
                "Alerta" => "simple",
                "Titulo" => "Error !!",
                "Texto" => "El Usuario ya existe, ingresa otro nombre",
                "Tipo" => "error"
            ];
            echo json_encode($alerta);
            exit();
        }
        if ($email != "") {
            if (filter_var($email, FILTER_VALIDATE_EMAIL)) {
                $check_email = main_model::consulta_simple("SELECT cliente.email FROM mercurio.cliente WHERE 
                                                      email = '$email'");
                if ($check_email->rowCount() > 0) {
                    $alerta = [
                        "Alerta" => "simple",
                        "Titulo" => "Error !!",
                        "Texto" => "El Email ya existe, ingresa otro email",
                        "Tipo" => "error"
                    ];
                    echo json_encode($alerta);
                    exit();
                } else {
                    $alerta = [
                        "Alerta" => "simple",
                        "Titulo" => "Error !!",
                        "Texto" => "El Email no es valido",
                        "Tipo" => "error"
                    ];
                    echo json_encode($alerta);
                    exit();
                }

            }
        }
        if ($id_rol != 3) {
            $alerta = [
                "Alerta" => "simple",
                "Titulo" => "Error !!",
                "Texto" => "Los permisos no estan definidos",
                "Tipo" => "error"
            ];
            echo json_encode($alerta);
            exit();
        }

        $datos_user_reg = [
            "pass" => $clave,
            "nombreusuario" => $nombreusuario,
            "id_rol" => $id_rol,
            "nombrecliente" => $nombrecliente,
            "apellidopaterno" => $apellidopaterno,
            "apellidomaterno" => $apellidomaterno,
            "telefono" => $telefono,
            "email" => $email,
            "calle" => $calle,
            "numero" => $numero,
            "interior" => $interior,
            "codigopostal" => $codigopostal,
            "colonia" => $colonia,
            "municipio" => $municipio,
            "estado" => $estado,
            "id_rol" => 3
        ];
        //var_dump($nom_usuario_reg.'linea 242 controller');
        $agregar_usuario = user_model::add_user_model($datos_user_reg);
        if ($agregar_usuario->rowCount() == 1) {
            $alerta = [
                "Alerta" => "limpiar",
                "Titulo" => "Usuario Registrado",
                "Texto" => "Usuario ha sido registrado en la BD",
                "Tipo" => "success"
            ];
        } else {
            $alerta = [
                "Alerta" => "simple",
                "Titulo" => "Error !!",
                "Texto" => "No se hizo el registro en la BD",
                "Tipo" => "error"
            ];
        }
        echo json_encode($alerta);
    }

}
