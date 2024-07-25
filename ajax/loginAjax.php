<?php
    $peticionAjax=true;
    require_once "../php/config.php";

    if (isset($_POST['username']) && isset($_POST['password'])) {

    }else{
        session_start(['name'=>'FM']);
        session_unset();
        session_destroy();
        header("location: ".SERVERURL."/index.php");
        exit();
    }
