<?php
class vistasModel{

    protected static function getView_model($vistas): string {
        // Lista blanca de vistas permitidas
        $whiteList = ["home", "patient-list","admin","stock-new","patient-search","patient-update","company","product-list","product-new","product-search","product-update",
            "reservation-list","reservation-new","reservation-pending","reservation-reservation","reservation-search","reservation-update","user-list",
            "user-new","user-search","user-update","medic-user","recipe-new","labs-new","joce-new","lucio-new","hamel-new","date-new"];
        if (in_array($vistas, $whiteList)) {
            $filePath = "./views/contents/" . $vistas . "-view.php";
            if (is_file($filePath)) {
                $contenido = $filePath;
            } else {
                $contenido = "404";
            }
        } elseif ($vistas == "login" || $vistas == "index") {
            $contenido = "login";
        } else {
            $contenido = "404";
        }
        return $contenido;
    }
}