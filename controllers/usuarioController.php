<?php


global $peticionAjax;
if($peticionAjax){
    require_once "../models/usuarioModel.php";
}else{
    require_once "./models/usuarioModel.php";
}

class usuarioController extends usuarioModel {
    public function add_usuario_controller(){
        $nombre = mainModel::clean_chain($_POST['nombrecliente_reg']);
        $appaterno = mainModel::clean_chain($_POST['appaterno_reg']);
        $apmaterno = mainModel::clean_chain($_POST['apmaterno_reg']);
        $telefono = mainModel::clean_chain($_POST['telefono_reg']);
        $cpostal = mainModel::clean_chain($_POST['codigo_postal']);
        $calle = mainModel::clean_chain($_POST['calle_reg']);
        $numero = mainModel::clean_chain($_POST['numero_reg']);
        $interior = mainModel::clean_chain($_POST['interior_reg']);
        $colonia = mainModel::clean_chain($_POST['colonia_reg']);
        $municipio = mainModel::clean_chain($_POST['municipio_reg']);
        $entidad = mainModel::clean_chain($_POST['entidad_reg']);
        $usuario = mainModel::clean_chain($_POST['usuario_reg']);
        $activo = mainModel::clean_chain($_POST['activo_reg']);
        $email = mainModel::clean_chain($_POST['email_reg']);
        $pass1 = mainModel::clean_chain($_POST['clave_1_reg']);
        $pass2 = mainModel::clean_chain($_POST['clave_2_reg']);
        $id_rol = mainModel::clean_chain($_POST['privilegio_reg']);

        /*----------- Comprobar campos vacios ------------*/
        if($nombre == "" || $appaterno == "" || $telefono == "" || $cpostal == "" || $calle == "" || $numero == "" || $colonia == ""
           || $municipio == "" || $entidad == "" || $activo == "" || $email == "" || $pass1 == "" || $pass2 == "" || $id_rol == ""){
            $alerta=[
                "Alerta"=>"simple",
                "Titulo"=>"Ocurrio un error inesperado",
                "Texto"=>"No haz llenado todos los campos obligatorios",
                "Tipo"=>"error"
            ];
            echo json_encode($alerta);
            exit();
        }
        if(mainModel::verify_data("[a-zA-ZáéíóúÁÉÍÓÚñÑ\s]{4,20}",$nombre)){
            $alerta=[
                "Alerta"=>"simple",
                "Titulo"=>"Ocurrio un error inesperado",
                "Texto"=>"El nombre no es valido",
                "Tipo"=>"error"
            ];
            echo json_encode($alerta);
            exit();
        }

        if(mainModel::verify_data("[a-zA-ZáéíóúÁÉÍÓÚñÑ ]{4,35}",$appaterno)){
            $alerta=[
                "Alerta"=>"simple",
                "Titulo"=>"Ocurrio un error",
                "Texto"=>"El apellido paterno no tiene el formato esperado",
                "Tipo"=>"error"
            ];
            echo json_encode($alerta);
            exit();
        }
        if($apmaterno !=""){
            if(mainModel::verify_data("[a-zA-ZáéíóúÁÉÍÓÚñÑ ]{4,35}",$apmaterno)){
                $alerta=[
                    "Alerta"=>"simple",
                    "Titulo"=>"Ocurrio un error inesperado",
                    "Texto"=>"El apellido Materno no tiene el formato esperado",
                    "Tipo"=>"error"
                ];
                echo json_encode($alerta);
                exit();
            }
        }
        if(mainModel::verify_data("[0-9()+]{10}",$telefono)){
            $alerta=[
                "Alerta"=>"simple",
                "Titulo"=>"Ocurrio un error",
                "Texto"=>"El telefono debe tener 10 caracteres",
                "Tipo"=>"error"
            ];
            echo json_encode($alerta);
            exit();
        }
        if(mainModel::verify_data("[a-zA-ZáéíóúÁÉÍÓÚñÑ\s]{4,45}",$colonia)){
            $alerta=[
                "Alerta"=>"simple",
                "Titulo"=>"Ocurrio un error",
                "Texto"=>"La colonia no tiene el formato esperado",
                "Tipo"=>"error"
            ];
            echo json_encode($alerta);
            exit();
        }
        if(mainModel::verify_data("[0-9a-zA-ZáéíóúÁÉÍÓÚñÑ\s]{1,35}",$calle)){
            $alerta=[
                "Alerta"=>"simple",
                "Titulo"=>"Ocurrio un error",
                "Texto"=>"La calle no tiene el formato esperado",
                "Tipo"=>"error"
            ];
            echo json_encode($alerta);
            exit();
        }
        if(mainModel::verify_data("[2-9][0-9]{4}",$cpostal)){
            $alerta=[
                "Alerta"=>"simple",
                "Titulo"=>"Ocurrio un error",
                "Texto"=>"El codigo postal no tiene el formato esperado",
                "Tipo"=>"error"
            ];
            echo json_encode($alerta);
            exit();
        }
        if(mainModel::verify_data("[a-zA-ZáéíóúÁÉÍÓÚñÑ\s]{4,30}",$municipio)){
            $alerta=[
                "Alerta"=>"simple",
                "Titulo"=>"Ocurrio un error",
                "Texto"=>"El municipio no tiene el formato esperado",
                "Tipo"=>"error"
            ];
            echo json_encode($alerta);
            exit();
        }
        if(mainModel::verify_data("[a-zA-ZáéíóúÁÉÍÓÚñÑ\s]{4,30}",$entidad)){
            $alerta=[
                "Alerta"=>"simple",
                "Titulo"=>"Ocurrio un error",
                "Texto"=>"La entidad no tiene el formato esperado",
                "Tipo"=>"error"
            ];
            echo json_encode($alerta);
            exit();
        }
        if(mainModel::verify_data("[0-9a-zA-ZáéíóúÁÉÍÓÚñÑ]{8,30}",$usuario)){
            $alerta=[
                "Alerta"=>"simple",
                "Titulo"=>"Ocurrio un error",
                "Texto"=>"El nombre de usuario no tiene el formato esperado",
                "Tipo"=>"error"
            ];
            echo json_encode($alerta);
            exit();
        }
        if(mainModel::verify_data("[a-zA-Z0-9._%+-]+@[a-zA-Z0-9.-]+\.[a-z]{2,}",$email)){
            $alerta=[
                "Alerta"=>"simple",
                "Titulo"=>"Ocurrio un error",
                "Texto"=>"El email no tiene el formato esperado",
                "Tipo"=>"error"
            ];
            echo json_encode($alerta);
            exit();
        }

        if(mainModel::verify_data("(?=.*[a-zA-Z])(?=.*[0-9])(?=.*[$@.\-])[a-zA-Z0-9$@.\-]{7,100}",$pass1)){
            $alerta=[
                "Alerta"=>"simple",
                "Titulo"=>"Ocurrio un error",
                "Texto"=>"La contraseña debe tener al menos 8 caracteres, 
                            debe incluir una letra mayuscula, una minuscula, un numero y un caracter especial '$*@.\-'",
                "Tipo"=>"error"
            ];
            echo json_encode($alerta);
            exit();
        }
        if(mainModel::verify_data("(?=.*[a-zA-Z])(?=.*[0-9])(?=.*[$@.\-])[a-zA-Z0-9$@.\-]{7,100}",$pass2)){
            $alerta=[
                "Alerta"=>"simple",
                "Titulo"=>"Ocurrio un error",
                "Texto"=>"La contraseña debe tener al menos 8 caracteres, 
                            debe incluir una letra mayuscula, una minuscula, un numero y un caracter especial '$*@.\-'",
                "Tipo"=>"error"
            ];
            echo json_encode($alerta);
            exit();
        }

        /*----------- comprobar las constraseñas ---------------*/
        if($pass1 != $pass2){
            $alerta=[
                "Alerta"=>"simple",
                "Titulo"=>"Ocurrio un error",
                "Texto"=>"Las constraseñas no coinciden",
                "Tipo"=>"error"
            ];
            echo json_encode($alerta);
            exit();
        }else{
            $clave=mainModel::encryption($pass1);
        }
        if($id_rol ==""){
            $alerta=[
                "Alerta"=>"simple",
                "Titulo"=>"Ocurrio un error",
                "Texto"=>"Debe seleccionar un rol",
                "Tipo"=>"error"
            ];
            echo json_encode($alerta);
            exit();
        }
        /*-----------Revisión de úsuarios*/
        $checkUsuario = mainModel::consulta_simple("SELECT nombreusuario FROM usuarios WHERE nombreusuario = '{$usuario}'");
        if($checkUsuario -> rowCount() >0){
            $alerta=[
                "Alerta"=>"simple",
                "Titulo"=>"Ocurrio un error",
                "Texto"=>"El usuario ya existe",
                "Tipo"=>"error"
            ];
            echo json_encode($alerta);
            exit();
        }
        if($email != ""){
            if(filter_var($email, FILTER_VALIDATE_EMAIL)){
                $checkEmail = mainModel::consulta_simple("SELECT email FROM usuarios WHERE email = '{$email}'");
                if($checkEmail -> rowCount()>0){
                    $alerta=[
                        "Alerta"=>"simple",
                        "Titulo"=>"Ocurrio un error",
                        "Texto"=>"El email ya existe",
                        "Tipo"=>"error"
                    ];
                    echo json_encode($alerta);
                    exit();
                }
            }else{
                $alerta=[
                    "Alerta"=>"simple",
                    "Titulo"=>"Ocurrio un error",
                    "Texto"=>"El email no es valido",
                    "Tipo"=>"error"
                ];
                echo json_encode($alerta);
                exit();
            }
        }
        $datosUsuario = [
            "nombrecliente" => $nombre,
            "appaterno" => $appaterno,
            "apmaterno" => $apmaterno,
            "telefono" => $telefono,
            "codigopostal" => $cpostal,
            "calle" => $calle,
            "numero" => $numero,
            "interior" => $interior,
            "colonia" => $colonia,
            "password" => $clave,
            "nombreUsuario" => $usuario,
            "email" => $email,
            "enabled" => $activo,
            "rol" => $id_rol
        ];



        $agregarUsuario = usuarioModel::add_usuario_model($datosUsuario);
        if ($agregarUsuario && $agregarUsuario->rowCount() == 1) {
            $alerta = [
                "Alerta" => "limpiar",
                "Titulo" => "Exito !!",
                "Texto" => "Se ha insertado el usuario",
                "Tipo" => "success"
            ];
        } else {
            $alerta = [
                "Alerta" => "simple",
                "Titulo" => "Ocurrio un error",
                "Texto" => "Algo fallo, no se hizo la insercion",
                "Tipo" => "error"
            ];
        }

        echo json_encode($alerta);

    }

}

