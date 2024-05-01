<?php
global $peticionAjax;
if($peticionAjax){
        require_once "../models/login_model.php";
    }else{
        require_once "./models/login_model.php";
    }

    class login_controller extends login_model{
    /*----------------Controlador para inciar sesion------------*/
        public function sesion_controller(){
            $nombreusuario = main_model::clean_chains($_POST['usuario_log']);
            $pass = main_model::clean_chains($_POST['pass_log']);

            /*-------Comprobar campos vacios-------------------*/
            if ($nombreusuario == "" || $pass == "") {
                echo '<script type="text/javascript">
                        Swal.fire({
                        title: "Ocurrio un error inesperado",
                        type: "error",
                        text: "No has llenado todos los campos",
                        confirmButtonColor: "#4caf50",
                        confirmButtonText: "Aceptar"
                    });
                        </script>';
                    return false;
                }
            if(main_model::validate_datos("[a-zA-Z0-9]{1,35}",$nombreusuario)){
                echo '<script type="text/javascript">
                        Swal.fire({
                        title: "Ocurrio un error inesperado",
                        type: "error",
                        text: "El nombre de usuario es invalido",
                        confirmButtonColor: "#4caf50",
                        confirmButtonText: "Aceptar"
                    });
                        </script>';
            }
            if(main_model::validate_datos("[a-zA-Z0-9$@\.-]{7,20}",$pass)){
                echo '<script type="text/javascript">
                        Swal.fire({
                        title: "Ocurrio un error inesperado",
                        type: "error",
                        text: "La clave no concuerda con el usuario",
                        confirmButtonColor: "#4caf50",
                        confirmButtonText: "Aceptar"
                    });
                        </script>';
                exit();
            }
            $pass_encrypted = main_model::encryption($pass);
                $datos = [
                    "nombreusuario" => $nombreusuario,
                    "pass" => $pass_encrypted
                ];
                $datos_cuenta = self::sesion_model($datos);

                if ($datos_cuenta->rowCount()==1){
                   $row=$datos_cuenta->fetch();
                   session_start(['name'=>'FMAPP']);
                   $_SESSION['id_fmapp'] = $row['idusuario'];
                   $_SESSION['usuario_fmapp'] = $row['nombreusuario'];
                   $_SESSION['nombre_fmapp'] = $row['nombrecliente'];
                   $_SESSION['paterno_fmapp'] = $row['apellidopaterno'];
                   $_SESSION['id_rol_fmapp'] = $row['id_rol'];
                   //$_SESSION['foto'] = $row['foto'];
                   $_SESSION['token_fmapp'] = md5(uniqid(mt_rand(), true));
                   return header("Location: ".SERVERURL."home/");
                }else{
                    echo '<script type="text/javascript">
                        Swal.fire({
                        title: "Ocurrio un error inesperado",
                        type: "error",
                        text: "Usuario o Clave incorrectas",
                        confirmButtonColor: "#4caf50",
                        confirmButtonText: "Aceptar"
                    });
                        </script>';
                }
        }

        public function cerrar_sesion(){
            session_unset();
            session_destroy();
            if (headers_sent()){
                return "<script>window.location.href='".SERVERURL."login/'</script>";
            }else{
                return header("Location".SERVERURL."login");
            }
        }
    }



