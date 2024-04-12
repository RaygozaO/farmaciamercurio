<?php
    $peticionAjax = true;
    require_once "../config/APP.php";

    if(isset($_POST['nom_usuario_reg'])){
        /*-----------incluir controllador ---------- */
        require_once "../controllers/user_controller.php";
        var_dump($_POST);
        $ins_user=new user_controller();
        var_dump($ins_user);
        if(isset($_POST['nom_usuario_reg']) && isset($_POST['usuario_email'])) {
            echo $ins_user->conn(); //add_user_controller();
        }
    }else{
       session_start(['name'=>'FM']);
       session_unset();
       session_destroy();
       header("Location: /login");
       exit();
    }