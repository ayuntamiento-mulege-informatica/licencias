<?php
require_once '../connect.php';
require_once 'class_licencias_alcoholes.php';

$licencias_alcoholes = new licencias_alcoholes;

session_start();

if (isset($_POST['accion'])) {
  $_SESSION['msg'] = $licencias_alcoholes -> actualizarLicenciaAlcoholes($connect, $_POST['folio_anterior'], $_POST['folio'], $_POST['administracion'], $_POST['tipo'], $_POST['destino'], $_POST['anyo'], $_POST['caracteristicas'], $_POST['rfc'], $_POST['propietario'], $_POST['nombre_comercial'], $_POST['actividad'], $_POST['domicilio'], $_POST['fecha_expedicion']);
}

header('location: /editar_licencia_alcoholes/'.$_POST['folio']);
?>
