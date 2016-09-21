<?php
########## FUNCIONESS SEGURIDAD ################3
if (get_magic_quotes_gpc()) {
    function stripslashes_profundo($valor)
    {
        $valor = is_array($valor) ?
                    array_map('stripslashes_profundo', $valor) :
                    stripslashes($valor);

        return $valor;
    }

    $_POST = array_map('stripslashes_profundo', $_POST);
    $_GET = array_map('stripslashes_profundo', $_GET);
    $_COOKIE = array_map('stripslashes_profundo', $_COOKIE);
    $_REQUEST = array_map('stripslashes_profundo', $_REQUEST);
 }

function addslashes__recursive($var)
	 {
		 if (!is_array($var))
		 return addslashes($var);
		 $new_var = array();
		 foreach ($var as $k => $v)
		 $new_var[addslashes($k)]=addslashes__recursive($v);
		 return $new_var;
     }
 $_POST= addslashes__recursive($_POST);
 $_GET= addslashes__recursive($_GET);
 $_REQUEST= addslashes__recursive($_REQUEST);
 $_SERVER= addslashes__recursive($_SERVER);
 $_COOKIE= addslashes__recursive($_COOKIE);

function escape($string){
	return mysql_real_escape_string($string);
}

function referente(){
	/*if(preg_match("#^http(s)?:\/\/localhost\/#",$_SERVER['HTTP_REFERER']))
	{return eregi("^http(s)?:\/\/localhost\/",$_SERVER['HTTP_REFERER']);#prueba localhost
	}else{
	 return eregi("^http(s)?:\/\/(www\.)?\.",$_SERVER['HTTP_REFERER']);#prueba servidor
	}*/
	return true;
}

function Redireccionar($pag){
	 header("Location: $pag");
	 exit();
}
function Seguridad($texto){
	/*@include_once("Conexion.php");
	$condicion = Conectar();  */
    $texto = htmlspecialchars(trim(addslashes(stripslashes(strip_tags($texto)))));
	$texto = str_replace(chr(160),'',$texto);
	return mysql_real_escape_string($texto);
}
function Syntaxis_Letra($letra) {
return !preg_match("/[^a-zA-Z0-9]/", $letra);
}


function Syntaxis_Num($numero) {
return !preg_match("/[^0-9]/", $numero);
}

function Syntaxis_Login($Usuarioq) {
return !preg_match("/[^a-zA-Z0-9_-]/", $Usuarioq);
}

function Syntaxis_AlfaNum($alfanumerico) {
return !preg_match("/[^a-zA-Z0-9]/", $alfanumerico);
}

function Syntaxis_Email($email){
  $exp = "^[a-z'0-9]+([._-][a-z'0-9]+)*@([a-z0-9]+([._-][a-z0-9]+))+$";
  return eregi($exp,$email);
   if(eregi($exp,$email)){if(checkdnsrr(array_pop(explode("@",$email)),"MX")){return true;}else{return false;}}else{return false;}
}
?>