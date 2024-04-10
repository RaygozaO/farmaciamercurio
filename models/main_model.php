<?php
global $peticionAjax;
if($peticionAjax){
        require_once "../config/SERVER.php";
    }else{
        require_once "../config/SERVER.php";
    }
    class main_model{
        /*----------- funcion de conexion a BD ------------*/
        protected static function connDB(){
            $mbd = new PDO(SGBD,USER,PASS);
            $mbd->exec('SET CHARACTER SET utf8');
            return $mbd;
        }
        /*------ consultas sin modelo----------------------*/
        protected static function consulta_simple($consulta){
            $sql=self::connDB()->prepare($consulta);
            $sql->execute();
            return $sql;
        }
        /*---------encriptar strings---------------------*/ 
        public function encryption($string){
			$output=FALSE;
			$key=hash('sha256', SECRET_KEY);
			$iv=substr(hash('sha256', SECRET_IV), 0, 16);
			$output=openssl_encrypt($string, METHOD, $key, 0, $iv);
			$output=base64_encode($output);
			return $output;
		}
        /*---------------desecritpar strings------------ */
		public static function decryption($string){
			$key=hash('sha256', SECRET_KEY);
			$iv=substr(hash('sha256', SECRET_IV), 0, 16);
			$output=openssl_decrypt(base64_decode($string), METHOD, $key, 0, $iv);
			return $output;
		}
        /*---------------Codigos aleatorios------------- */
        protected static function get_codes_al($letra,$long,$num){
            for($i=1; $i<=$long; $i++){
                $aleatorio=rand(0,9);
                $letra.=$aleatorio;
            }
            return $letra."-".$num;
        }

        /*--------------Evitar Injection--------------- */
        protected static function clean_chains($chain){
            $chain=trim($chain);
            $chain=stripcslashes($chain);
            $chain=str_ireplace("<script>", "", $chain);
            $chain=str_ireplace("<script src","",$chain);
            $chain=str_ireplace("<script type=","",$chain);
            $chain=str_ireplace("SELECT * FROM","",$chain);
            $chain=str_ireplace("DELETE FROM","", $chain);
            $chain=str_ireplace("DROP TABLE","",$chain);
            $chain=str_ireplace("DROP DATABASE","",$chain);
            $chain=str_ireplace("TRUNCATE TABLE","",$chain);
            $chain=str_ireplace("SHOW TABLES","",$chain);
            $chain=str_ireplace("SHOW DATABASES","",$chain);
            $chain=str_ireplace("<?php","",$chain);
            $chain=str_ireplace("?>","",$chain);
            $chain=str_ireplace("--","",$chain);
            $chain=str_ireplace(">","",$chain);
            $chain=str_ireplace("<","",$chain);
            $chain=str_ireplace("[","",$chain);
            $chain=str_ireplace("]","",$chain);
            $chain=str_ireplace("^","",$chain);
            $chain=str_ireplace("==","",$chain);
            $chain=str_ireplace(";","",$chain);
            $chain=str_ireplace("::","",$chain);
            $chain=trim($chain);
            $chain=stripslashes($chain);
            return $chain;
        }
        /*-----------Validad datos--------------------- */
        protected static function validate_datos($filtro,$cadena){
            return preg_match("/^" . $filtro . "$/", $cadena) ? false : true;
        }
        /*--------------Validar Fechas ----------------*/
        protected static function validate_date($fecha){
            $value=explode('-',$fecha);
            return (count($value)==3 && checkdate($value[1],$value[2],$value[0]))?false :true;
        }
        /*-------------paginador--------------------- */
        protected static function paginador_vitas($page,$num_pages,$url,$bout){
            $table='<nav aria-label="Page navigation example"><ul class="pagination 
            justify-content-center"';
            if($page==1){
                $table.='<li class="page-item disable"><a class="page-link">
                <i class="fas fa-angle-double-left"></i></a></li>';
            }else{
                $table.='<li class="page-item"><a class="page-link" href="'.$url.'1/" tabindex="-1">
                <i class="fas fa-angle-double-left"></i></a></li>
                <li class="page-item"><a class="page-link" href="'.$url.($page-1).'/" tabindex="-1">
                Anterior</a></li>
                ';
            }
            $ci=0;
            for($i=$page; $i<=$num_pages; $i++){
                if($ci>=$bout){
                    break;
                }
                if($page==$i){
                    $table.='<li class="page-item"><a class="page-link active" href="'.$url.$i.'/" tabindex="-1">'.$i.'</a></li>';
                }else{
                    $table.='<li class="page-item"><a class="page-link" href="'.$url.$i.'/" tabindex="-1">'.$i.'</a></li>';
                }
                $ci++;
            }

            if($page==$num_pages){
                $table.='<li class="page-item disable"><a class="page-link">
                <i class="fas fa-angle-double-right"></i></a></li>';
            }else{
                $table.='<li class="page-item"><a class="page-link" href="'.$url.($page-1).'/" tabindex="-1">
                Siguiente</a></li>
                <li class="page-item"><a class="page-link" href="'.$url.$num_pages.'/" tabindex="-1">
                <i class="fas fa-angle-double-right"></i></a></li>
                ';
            }

            $table.='</ul></nav>';
            return $table;
        }
    }