<?php

global $peticionAjax;
if ($peticionAjax){
        require_once "../config/SERVER.php";
    }else{
        require_once "./config/SERVER.php";
    }

class mainModel{
    /* ------------------- Conectar a DB -------------*/
    protected static function conectar(){
        $mdb = new PDO(SGBD, USER, PASSWORD);
        $mdb -> exec("SET CHARACTER SET utf8");
        return $mdb;
    }
    /*--------------- Ejecutar Consultas Simples -------------*/
    /*protected static function consulta_simple($consulta){
        $sql = self::conectar() -> prepare($consulta);
        $sql -> execute();
        return $sql;
    }*/
    protected static function consulta_simple($consulta){
        try {
            $sql = self::conectar()->prepare($consulta);
            $sql->execute();
            return $sql;
        } catch (PDOException $e) {
            // Captura el error y muestra un mensaje
            echo "Error en la consulta: " . $e->getMessage();
            return false;
        }
    }

    public function encryption($string){
        $output=FALSE;
        $key=hash('sha256', SECRET_KEY);
        $iv=substr(hash('sha256', SECRET_IV), 0, 16);
        $output=openssl_encrypt($string, METHOD, $key, 0, $iv);
        $output=base64_encode($output);
        return $output;
    }

    protected static function decryption($string){
        $key=hash('sha256', SECRET_KEY);
        $iv=substr(hash('sha256', SECRET_IV), 0, 16);
        $output=openssl_decrypt(base64_decode($string), METHOD, $key, 0, $iv);
        return $output;
    }

    /*----------Generar codigos aleatorios-------------*/
    protected static function generar_codigos($letra,$longitud,$numero){
        for($i=1; $i<=$longitud; $i++){
            $aleatorio = rand(0, 9);
            $letra.=$aleatorio;
        }
        return $letra."-".$numero;
    }
    /* ------- Funcion para limpiar cadenas -------*/
    protected static function clean_chain($chain){
        $chain = trim($chain);
        $chain = stripcslashes($chain);
        $chain = str_ireplace("<script>", "", $chain);
        $chain = str_ireplace("</script>", "", $chain);
        $chain = str_ireplace("<script src", "", $chain);
        $chain = str_ireplace("<script type=", "", $chain);
        $chain = str_ireplace("SELECT * FROM", "", $chain);
        $chain = str_ireplace("DROP TABLE", "", $chain);
        $chain = str_ireplace("TRUNCATE TABLE", "", $chain);
        $chain = str_ireplace("SHOW TABLES", "", $chain);
        $chain = str_ireplace("SHOW DATABASES", "", $chain);
        $chain = str_ireplace("<?php", "", $chain);
        $chain = str_ireplace("?>", "", $chain);
        $chain = str_ireplace("--", "", $chain);
        $chain = str_ireplace(">", "", $chain);
        $chain = str_ireplace("<", "", $chain);
        $chain = str_ireplace("[", "", $chain);
        $chain = str_ireplace("]", "", $chain);
        $chain = str_ireplace("^", "", $chain);
        $chain = str_ireplace("==", "", $chain);
        $chain = str_ireplace(";", "", $chain);
        $chain = str_ireplace("::", "", $chain);
        $chain = stripcslashes($chain);
        return trim($chain);
    }
    /*-------------- Validar Caracteres -------------*/
    protected static function verify_data($filter,$cadena){
        if(preg_match("/^".$filter."$/",$cadena )){
            return false;
        }else{
            return true;
        }
    }
    /*--------------- Validar Fechas ---------------*/
    protected static function verify_date($fecha){
        $valores=explode("-",$fecha);
        if(count($valores)==3 && checkdate($valores[1],$valores[2],$valores[0])){
            return false;
        }else{
            return true;
        }
    }
    /*-----------------Paginador de Tablas ----------*/
    protected static function paginador($pagina,$numPagina,$url,$botones){
        $tabla = '<nav aria-label="Page navigation example">
                <ul class="pagination justify-content-center">';
        if($pagina==1){
            $tabla.='<li class="page-item disabled">
                        <a class="page-link" ><i class="fa fa-angle-double-left"></i></a>
                    </li>';
        }else{
            $tabla.='<li class="page-item ">
                        <a class="page-link" href="'.$url.'1/" ><i class="fa fa-angle-double-left"></i></a>
                    </li>
                    <li class="page-item ">
                        <a class="page-link" href="'.$url.($numPagina -1).'/" >Anterior</a>
                    </li>';
        }

        $ci = 0;
        for ($i = $pagina; $i <= $numPagina ; $i++) {
            if($ci >= $botones){
                break;
            }
            if($pagina == $i){
                $tabla.='<li class="page-item ">
                            <a class="page-link active" href="'.$url.$i.'/" >'.$i.'</a>
                         </li>';
            }else{
                $tabla.='<li class="page-item ">
                            <a class="page-link" href="'.$url.$i.'/" >'.$i.'</a>
                         </li>';
            }
            $ci++;
        }

        if($pagina==$numPagina){
            $tabla.='<li class="page-item disabled">
                        <a class="page-link" ><i class="fa fa-angle-double-right"></i></a>
                    </li>';
        }else{
            $tabla.='<li class="page-item ">
                        <a class="page-link" href="'.$url.($numPagina +1).'/" >Siguiente</a>
                    </li>
                    <li class="page-item ">
                        <a class="page-link" href="'.$url.$numPagina.'" ><i class="fa fa-angle-double-left"></i></a>
                    </li>';
        }
        $tabla.='</ul></nav>';
        return $tabla;
    }

}