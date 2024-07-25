<?php
    $peticionAjax=true;
    require_once "../config/APP.php";

    // Verifica si no se ha enviado ningún encabezado previamente
    if (headers_sent()) {
        die("Error: Los encabezados ya se han enviado");
    }

    if (isset($_POST['nombrecliente_reg'])) {
        /*------------------- Instacia al controllador ------------*/
        require_once "../controllers/usuarioController.php";
        $ins_usuario = new usuarioController();
        /*---------------Agrgar un usuario -----------------*/
        if(isset($_POST['usuario_reg'] )&& isset($_POST['email_reg'])){
            echo $ins_usuario -> add_usuario_controller();
        }

    } else {
        session_start(['name' => 'FM']);
        session_unset();
        session_destroy();

        header("Location: " . SERVERURL . "login/");
        exit();
    }


class usuarioAjax extends mainModel{}