<?php
/**
* Este archivo es el encargado de conectar la página web con la base de datos.
*/

define('BD_HOST','localhost'); // Nombre del host.
define('BD_USR','root'); // Nombre del usuario de la base de datos.
define('BD_PASS','0st3yj49xt'); // Contraseña de acceso a la base de datos.
define('BD_NAME','licencias_comerciales'); // Nombre de la base de datos.

$connect = new mysqli(BD_HOST, BD_USR, BD_PASS, BD_NAME);
if(!$connect){
	echo 'Error: No se pudo conectar a MySQL.'.PHP_EOL;
	echo 'errno de depuración: '.mysqli_connect_errno().PHP_EOL;
	echo 'error de depuración: '.mysqli_connect_error().PHP_EOL;
	exit;
}
mysqli_query($connect,'SET NAMES "utf8"');

// VARIABLES PARA PAGINADOR.
$pag = 1;
$noReg = 25;
?>
