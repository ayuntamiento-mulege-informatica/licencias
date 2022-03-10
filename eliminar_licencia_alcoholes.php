<?php
require_once 'connect.php';
require_once 'lib/class_licencias_alcoholes.php';

$licencias_alcoholes = new licencias_alcoholes;

session_start();

$_SESSION['msg'] = $licencias_alcoholes -> eliminarLicenciaAlcoholes($connect, $parametro_2);

header('location: /lista_licencias_alcoholes');
?>
