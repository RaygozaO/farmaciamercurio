<?php

global $peticionAjax;
if($peticionAjax){
    require_once "../models/loginModelo.php";
}else{
    require_once "./models/loginModelo.php";
}
class loginController extends loginModelo{

    public function iniciarSesion(){
        $usuario = mainModel::clean_chain($_POST["usuario_log"]);
        $password = mainModel::clean_chain($_POST["clave_log"]);
        if(empty($usuario) || empty($password)){
            echo '<script type="text/javascript">
               Swal.fire({
            icon: "error",
            title: "Ocurrio un error, inesperado",
            text: "No has llenado todos los campos",
            confirmButtonText: "Aceptar"
            });
            </script>';
        }
        if(mainModel::verify_data("[0-9a-zA-ZáéíóúÁÉÍÓÚñÑ]{8,30}",$usuario)){
            echo '<script type="text/javascript">
               Swal.fire({
            icon: "error",
            title: "Ocurrio un error, inesperado",
            text: "El usuario no es correcto",
            confirmButtonText: "Aceptar"
            });
            </script>';
        }
        if(mainModel::verify_data("(?=.*[a-zA-Z])(?=.*[0-9])(?=.*[$*@.\-])[a-zA-Z0-9$*@.\-]{7,100}",$password)){
            echo '<script type="text/javascript">
               Swal.fire({
            icon: "error",
            title: "Ocurrio un error, inesperado",
            text: "La contraseña no es correcta",
            confirmButtonText: "Aceptar"
            });
            </script>';
        }
        $clave = mainModel::encryption($password);
        $datosLogin = ["usuario" => $usuario, "password" => $clave];
        $datosCuenta = loginModelo::inciarSesion($datosLogin);
        $pass = loginModelo::decryption('N0lOd2Z4UUFNbm94eEhjT05ocXlVQT09');
        echo $pass;
        if($datosCuenta -> rowCount()==1){
            $row = $datosCuenta -> fetch();
            session_start(['name' => 'FM']);
            $_SESSION['id_fm'] = $row["idusuario"];
            $_SESSION['usuario_fm'] = $row["nombreusuario"];
            $_SESSION['nombre_fm'] = $row["nombrecliente"];
            $_SESSION['apellido_fm'] = $row["apellidopaterno"];
            $_SESSION['rol_fm'] = $row["id_rol"];
            $_SESSION['token_fm'] = md5(uniqid(mt_rand(), true));

            return header("Location:".SERVERURL."home");
        }else{
            echo '<script type="text/javascript">
               Swal.fire({
            icon: "error",
            title: "Ocurrio un error, inesperado",
            text: "El usuario o clave son incorrectos",
            confirmButtonText: "Aceptar"
            });
            </script>';
        }
    }

}
