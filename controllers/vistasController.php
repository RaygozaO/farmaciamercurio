<?php
    require_once './models/vistasModel.php';

    class vistasController extends vistasModel {
        /* ------------- Controlador obtener plantilla --------------*/
        public function getTemplate_controller(){
            return require_once "./views/template.php";
        }

        public function getViews_controller(): string {
            if (isset($_GET['views'])) {
                $views = $_GET['views'];
                $route = explode('/', $views);
                if (isset($route[0])) {
                    $response = vistasModel::getView_model($route[0]);
                } else {
                    $response = "error";
                }
            } else {
                $response = "login";
            }
            return $response;
        }

    }
