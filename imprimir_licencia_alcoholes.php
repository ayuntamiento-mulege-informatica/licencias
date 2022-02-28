<?php
require_once 'connect.php';
require_once 'lib/class_licencias_alcoholes.php';
// require_once 'lib/class_administraciones.php';

// session_start();

if (!isset($_SESSION['area'])) {
  header('location: /');
}
else {
  if ($_SESSION['area'] == 'Recaudación') {

    $licencias_alcoholes = new licencias_alcoholes;
    // $administraciones = new administraciones;

    $info = $licencias_alcoholes -> infoLicenciaAlcoholes($connect, $parametro_2);
    // $funcionario = $administraciones -> imprimirFuncionarios($connect, $titulo['admin']);

    ?>
    <!DOCTYPE html>
    <html lang="es-MX">
    <head>
      <meta charset="utf-8">
      <title>Título de propiedad - Página 1</title>
      <link rel="stylesheet" media="screen" href="/css/screen.css">
      <link rel="stylesheet" media="print" href="/css/print.css">
    </head>
    <body>
      <div class="pagina">
        <h1>ESTA LICENCIA ES VÁLIDA SOLO POR EL <?php echo $info['anyo']; ?></h1>
        <p>TIPO Y FOLIO <span style="color: red;"> <?php echo $info['tipo'].'-'.str_pad($info['folio'], 5, "0", STR_PAD_LEFT); ?></span></p>

        <p>LICENCIA PARA OPERAR ESTABLECIMIENTO DE BEBIDAS ALCOHÓLICAS DESTINADAS A:</p>

        <h2 align="center">VENTA</h2>

        <p>CON FUNDAMENTO EN LOS ARTÍCULOS 9, 13 Y 14 DE LA LEY SOBRE EL CONTROL DE LICENCIAS DESTINADAS AL ALMACENAJE, DISTRIBUCIÓN, VENTA Y CONSUMO DE BEBIDAS ALCOHÓLICAS DEL ESTADO DE BAJA CALIFORNIA SUR, SE OTROGA LA PRESENTE LICENCIA CON LAS SIGUIENTES CARACTERÍSTICAS <?php echo $info['caracteristicas']; ?> RFC: <?php echo $info['rfc']; ?></p>
      </div>

      <!-- CUBIERTA DE PROTECCIÓN -->
      <div class="cubierta"></div>
    </body>
    </html>
    <?php
  }
}
?>
