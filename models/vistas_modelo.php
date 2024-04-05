<?php
    class vistas_modelo{
        /*-----------Obtener Vistas -------- */
        protected static function get_view_model($vistas){
            $white_list=["home","client-list","client-new","client-list","client-search",
                        "client-update","company","product-list","product-new","product-search",
                    "product-update","reports","reservation-approved","reservation-list",
                    "reservation-new","reservation-new","reservation-search","reservation-status",
                    "reservation-update","user-list","user-new","user-search","user-update","stock-list",
                "stock-update"];
            if(in_array($vistas, $white_list)){
                if(is_file("./views/contents/".$vistas."-view.php")){
                    $content="./views/contents/".$vistas."-view.php";
                }else{
                    $content="404";
                }
            }else if($vistas == "login" || $vistas == "index"){
                $content="login";
            }else{
                $content ="404";
            }
            return $content;
        }
    }