<?php
global $peticionAjax;
if($peticionAjax){
        require_once "../models/user_model.php";
    }else{
        require_once "../models/user_model.php";
    }

class user_controller extends user_model{
    public function conn():void{
        $clave = 12345678;
        $datos_user_reg=[
            "pass"=>$clave
        ];
        $agregar_usuario=user_model::add_user_model($datos_user_reg);
        if($agregar_usuario->rowCount() == 1){
            $alerta = [
                "Alerta" => "limpiar",
                "Titulo" => "Usuario Registrado",
                "Texto" => "Usuario ha sido registrado en la BD",
                "Tipo" => "success"
            ];
        }else{
            $alerta = [
                "Alerta" => "simple",
                "Titulo" => "Error !!",
                "Texto" => "No se hizo el registro en la BD",
                "Tipo" => "error"
            ];
        }
        echo json_encode($alerta);
    }

    /*public function add_user_controller():void{
        $pass = main_model::clean_chains($_POST['pass']);
        $pass_2 = main_model::clean_chains($_POST['pass_2']);
        $nom_usuario_reg = main_model::clean_chains($_POST['nom_usuario_reg']);
        $id_rol = main_model::clean_chains($_POST['usuario_privilegio_reg'] ?? 3);
        $nom_cliente = main_model::clean_chains($_POST['usuario_nombre_reg']);
        $ape_paterno = main_model::clean_chains($_POST['apellido_pat_reg']);
        $ape_materno = main_model::clean_chains($_POST['apellido_mat_reg']);
        $telefono = main_model::clean_chains($_POST['usuario_telefono_reg']);
        $usuario_email = main_model::clean_chains($_POST['usuario_email']);
        $calle = main_model::clean_chains($_POST['calle']);
        $numero = main_model::clean_chains($_POST['numero']);
        $interior = main_model::clean_chains($_POST['interior']);
        $cp = main_model::clean_chains($_POST['cp']);
        $colonia = main_model::clean_chains($_POST['colonia']);
        $municipio = main_model::clean_chains($_POST['municipio']);
        $estado = main_model::clean_chains($_POST['estado']);


        if($pass != $pass_2){
            $alert_pass=[
                "Alerta"=>"simple",
                "Titulo"=>"Error",
                "Texto"=>"Contraseñas no coinciden",
                "Tipo"=>"error"
            ];
            echo json_encode($alert_pass);
            exit();
        }else{
            $clave=main_model::encryption($pass);
        }

        if(main_model::validate_datos("[a-zA-Z0-9]{5,20}",$nom_usuario_reg)){
            $alerta=[
                "Alerta"=>"simple",
                "Titulo"=>"Error",
                "Texto"=>"El Usuario no cumple con el formato requerido",
                "Tipo"=>"error"
            ];
            echo json_encode($alerta);
            exit();
        }
        if(main_model::validate_datos("[a-zA-ZáéíóúÁÉÍÓÚñÑ ]{4,35}",$nom_cliente)){
            $alerta=[
                "Alerta"=>"simple",
                "Titulo"=>"Error",
                "Texto"=>"El Nombre no cumple con el formato requerido",
                "Tipo"=>"error"
            ];
            echo json_encode($alerta);
            exit();
        }
        if(main_model::validate_datos("[a-zA-ZáéíóúÁÉÍÓÚñÑ ]{4,35}",$ape_paterno)){
            $alerta=[
                "Alerta"=>"simple",
                "Titulo"=>"Error",
                "Texto"=>"El Apellido Paterno, no cumple con el formato requerido",
                "Tipo"=>"error"
            ];
            echo json_encode($alerta);
            exit();
        }
        if(main_model::validate_datos("[a-zA-ZáéíóúÁÉÍÓÚñÑ ]{4,35}",$ape_materno)){
            $alerta=[
                "Alerta"=>"simple",
                "Titulo"=>"Error",
                "Texto"=>"El Apellido Materno, no cumple con el formato requerido",
                "Tipo"=>"error"
            ];
            echo json_encode($alerta);
            exit();
        }
        if($telefono == "(+52)"){
            $alerta=[
                "Alerta"=>"simple",
                "Titulo"=>"Error",
                "Texto"=>"No has ingresado un telefono",
                "Tipo"=>"error"
            ];
            echo json_encode($alerta);
            exit();
        }
        if(main_model::validate_datos("[a-zA-ZáéíóúÁÉÍÓÚñÑ0-9\-. ]{5,40}",$calle)){
            $alerta=[
                "Alerta"=>"simple",
                "Titulo"=>"Error",
                "Texto"=>"La Calle, no cumple con el formato requerido",
                "Tipo"=>"error"
            ];
            echo json_encode($alerta);
            exit();
        }
        if(main_model::validate_datos("[a-zA-ZáéíóúÁÉÍÓÚñÑ0-9\-.]{1,40}",$numero)){
            $alerta=[
                "Alerta"=>"simple",
                "Titulo"=>"Error",
                "Texto"=>"El Numero, no cumple con el formato requerido",
                "Tipo"=>"error"
            ];
            echo json_encode($alerta);
            exit();
        }
        if(main_model::validate_datos("[a-zA-ZáéíóúÁÉÍÓÚñÑ0-9\-.]{1,40}",$interior)){
            $alerta=[
                "Alerta"=>"simple",
                "Titulo"=>"Error",
                "Texto"=>"El Numero Interior, no cumple con el formato requerido",
                "Tipo"=>"error"
            ];
            echo json_encode($alerta);
            exit();
        }
        if(main_model::validate_datos("\d{5}",$cp)){
            $alerta=[
                "Alerta"=>"simple",
                "Titulo"=>"Error",
                "Texto"=>"El Codigo Postal, no cumple con el formato requerido",
                "Tipo"=>"error"
            ];
            echo json_encode($alerta);
            exit();
        }
        if(main_model::validate_datos("[0-9a-zA-ZáéíóúÁÉÍÓÚñÑ ]{5,40}",$colonia)){
            $alerta=[
                "Alerta"=>"simple",
                "Titulo"=>"Error",
                "Texto"=>"La Colonia, no cumple con el formato requerido",
                "Tipo"=>"warning"
            ];
            echo json_encode($alerta);
            exit();
        }
        if(main_model::validate_datos("[a-zA-ZáéíóúÁÉÍÓÚñÑ ]{5,40}",$municipio)){
            $alerta=[
                "Alerta"=>"simple",
                "Titulo"=>"Error",
                "Texto"=>"El Municipio, no cumple con el formato requerido",
                "Tipo"=>"error"
            ];
            echo json_encode($alerta);
            exit();
        }
        if(main_model::validate_datos("[a-zA-ZáéíóúÁÉÍÓÚñÑ ]{5,40}",$estado)){
            $alerta=[
                "Alerta"=>"simple",
                "Titulo"=>"Error",
                "Texto"=>"El Estado, no cumple con el formato requerido",
                "Tipo"=>"error"
            ];
            echo json_encode($alerta);
            exit();
        }


        if($nom_usuario_reg =="" || $nom_cliente=="" || $ape_paterno=="" || $ape_materno =="" || $telefono==""
            || $cp=="" || $usuario_email=="" || $calle =="" || $numero == "" || $colonia == "" || $municipio==""
            || $estado == ""){
            $alerta=[
                "Alerta"=>"simple",
                "Titulo"=>"Precaución !!",
                "Texto"=>"No has ingresado todos los datos",
                "Tipo"=>"warning"
            ];
            echo json_encode($alerta);
            exit();
        }
        $check_user=main_model::consulta_simple("SELECT usuarios.nombreusuario FROM mercuriodb.usuarios WHERE 
                                          nombreusuario = $nom_usuario_reg");
        if($check_user->rowCount()>0){
            $alerta=[
                "Alerta"=>"simple",
                "Titulo"=>"Error !!",
                "Texto"=>"El Usuario ya existe, ingresa otro nombre",
                "Tipo"=>"error"
            ];
            echo json_encode($alerta);
            exit();
        }
        if($usuario_email !=""){
            if(filter_var($usuario_email,FILTER_VALIDATE_EMAIL)){
                $check_email = main_model::consulta_simple("SELECT cliente.email FROM mercuriodb.cliente WHERE 
                                                          email = $usuario_email");
                if ($check_email->rowCount() > 0) {
                    $alerta = [
                        "Alerta" => "simple",
                        "Titulo" => "Error !!",
                        "Texto" => "El Email ya existe, ingresa otro email",
                        "Tipo" => "error"
                    ];
                    echo json_encode($alerta);
                    exit();
                }else{
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
        if($id_rol != 3){
            $alerta = [
                "Alerta" => "simple",
                "Titulo" => "Error !!",
                "Texto" => "Los permisos no estan definidos",
                "Tipo" => "error"
            ];
            echo json_encode($alerta);
            exit();
        }
        $clave = 12345678;
        $datos_user_reg=[
            "pass"=>$clave,
            "nom_usuario_reg"=>$nom_usuario_reg,
            "usuario_privilegio_reg"=>$id_rol,
            "usuario_nombre_reg"=>$nom_cliente,
            "apellido_pat_reg"=>$ape_paterno,
            "apellido_mat_reg"=>$ape_materno,
            "usuario_telefono_reg"=>$telefono,
            "usuario_email"=>$usuario_email,
            "calle"=>$calle,
            "numero"=>$numero,
            "interior"=>$interior,
            "cp"=>$cp,
            "colonia"=>$colonia,
            "municipio"=>$municipio,
            "estado"=>$estado
        ];

        $agregar_usuario=user_model::add_user_model($datos_user_reg);
        if($agregar_usuario->rowCount() == 1){
            $alerta = [
                "Alerta" => "limpiar",
                "Titulo" => "Usuario Registrado",
                "Texto" => "Usuario ha sido registrado en la BD",
                "Tipo" => "success"
            ];
        }else{
            $alerta = [
                "Alerta" => "simple",
                "Titulo" => "Error !!",
                "Texto" => "No se hizo el registro en la BD",
                "Tipo" => "error"
            ];
        }
        echo json_encode($alerta);
    }*/
}