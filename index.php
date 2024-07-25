<?php
    require_once "./config/APP.php";
    require_once "./controllers/vistasController.php";

    $template = new vistasController();
    $template -> getTemplate_controller();