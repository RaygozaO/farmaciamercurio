<?php
    require_once "./models/vistas_modelo.php";

    class vistas_controller extends vistas_modelo{
        /*-------- Controlador para obtener plantilla ----------*/ 
        public function get_plantilla_controller(){
            return require_once "./views/plantilla.php";      
        }
        /*------------------Obtener vistas --------------------*/
        public function get_views_controller(){
            if(isset($_GET['views'])){
            $ruta =explode("/",$_GET['views']);
                $respuesta=vistas_modelo::get_view_model($ruta[0]);
            }else{
                $respuesta="login";
            }
            return $respuesta;
        }
    }