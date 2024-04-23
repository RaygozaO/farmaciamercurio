<?php
$peticionAjax=true;
require_once "../config/APP.php";



if(isset($_POST['nombreusuario']) || isset($_POST['pass'])){

    /*--------- Instancia al controlador ---------*/
    require_once "../controllers/user_controller.php";
    $ins_usuario = new user_controller();


    /*--------- Agregar un usuario ---------*/
    if(isset($_POST['nombreusuario']) && isset($_POST['pass'])){
        echo $ins_usuario->add_user_controller();
    }

    /*--------- Eliminar un usuario ---------*/
    if(isset($_POST['nombreusuario'])){
        echo $ins_usuario->add_user_controller();
    }

    /*--------- Actualizar un usuario ---------*/
    if(isset($_POST['nombreusuario'])){
        echo $ins_usuario->actualizar_usuario_controlador();
    }


}else{
    session_start(['name'=>'SPM']);
    session_unset();
    session_destroy();
    header("Location: ".SERVERURL."login/");
    exit();
}


