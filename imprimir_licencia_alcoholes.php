<?php
require_once 'connect.php';
require_once 'lib/class_licencias_alcoholes.php';
require_once 'lib/class_administraciones.php';

if (!isset($_SESSION['area'])):
  header('location: /');
else:
  if ($_SESSION['area'] == 'Recaudación') :

    $licencias_alcoholes = new licencias_alcoholes;
    $administraciones = new administraciones;

    $info = $licencias_alcoholes -> infoLicenciaAlcoholes($connect, $parametro_2);
    $funcionario = $administraciones -> imprimirFuncionarios($connect, $info['admin']);

    $fecha_letra = $licencias_alcoholes -> obtenerFechaEnLetra($info['fecha_emision']); ?>
    <!DOCTYPE html>
    <html lang="es-MX">
    <head>
      <meta charset="utf-8">
      <title>PREVISUALIZACIÓN DE LICENCIA DE ALCOHOLES</title>
      <link rel="stylesheet" media="screen" href="/css/screen.css">
      <link rel="stylesheet" media="print" href="/css/print.css">
    </head>
    <body ondragstart="return false" onselectstart="return false" oncontextmenu="return false">
      <div class="pagina">
        <div class="pagina-contenido">
          <p style="font-size: 1.8rem; font-weight: bold; margin: .8cm 0 .2cm 0;">ESTA LICENCIA ES VÁLIDA SÓLO POR EL <?php echo $info['anyo']; ?></p>
          <p style="font-size: 1.5rem; font-weight: bold; margin: .2cm 0;">TIPO Y FOLIO <?php echo $info['tipo'].'-'.str_pad($info['folio'], 5, "0", STR_PAD_LEFT); ?></p>

          <p style="font-size: .8rem; margin: .2cm 0;">LICENCIA PARA OPERAR ESTABLECIMIENTO DE BEBIDAS ALCOHÓLICAS DESTINADAS A:</p>

          <p style="font-size: 1.5rem; font-weight: bold; margin: .2cm 0;"><?php echo $info['destino']; ?></p>

          <p style="font-size: .8rem; margin: .2cm 0;">CON FUNDAMENTO EN LA LEY QUE REGULA EL ALMACENAJE, DISTRIBUCIÓN, VENTA Y CONSUMO DE BEBIDAS ALCOHÓLICAS EN EL ESTADO DE BAJA CALIFORNIA SUR, SE OTORGA LA PRESENTE LICENCIA CON LAS SIGUIENTES CARACTERÍSTICAS <span style="font-weight: bold;"><?php echo $info['caracteristicas']; ?></span>, RFC: <span style="font-weight: bold;"><?php echo $info['rfc']; ?></span>.</p>

          <p style="margin: .2cm 0;"><span style="font-size: 1.5rem; font-weight: bold;"><?php echo $info['propietario']; ?></span><br><span  style="font-size: .8rem;">PROPIETARIO</span></p>

          <p style="margin: .2cm 0;"><span style="font-size: 1.5rem; text-decoration: underline; font-weight: bold;"><?php echo $info['nombre_comercial']; ?></span><br><span style="font-size: .8rem;">NOMBRE COMERCIAL</span></p>

          <p style="margin: .5cm 0;"><span style="font-size: .8rem;"><strong><?php echo $info['actividad']; ?></strong></span><br><span style="font-size: .8rem;">ACTIVIDAD</span></p>

          <p style="margin: .5cm 0;"><span style="font-size: .8rem;"><strong><?php echo $info['domicilio']; ?></strong></span><br><span style="font-size: .8rem;">DOMICILIO</span></p>

          <p style="margin: .2cm 0;"><span style="font-size: .8rem;"><strong>SANTA ROSALÍA, BAJA CALIFORNIA SUR, A <?php echo $fecha_letra; ?></strong></span><br><span style="font-size: .8rem;">LUGAR Y FECHA DE EXPEDICIÓN</span></p>

          <table>
            <tr>
              <td><span style="font-size: 1rem; font-weight: bold;"><?php echo $funcionario['presidente_municipal']; ?></span><br><span style="font-size: .8rem;">PRESIDENTA MUNICIPAL<br>DEL H. XVII AYUNTAMIENTO DE MULEGÉ</span></td>
              <td ><span style="font-size: 1rem; font-weight: bold;"><?php echo $funcionario['tesorero_municipal']; ?></span><br><span style="font-size: .8rem;">TESORERA MUNICIPAL<br>DEL H. XVII AYUNTAMIENTO DE MULEGÉ</span></td>
            </tr>
          </table>

          <p style="font-size: .8rem; margin: .8cm 0 0 0;">EL ORIGINAL DE ESTE DOCUMENTO DEBERÁ COLOCARSE EN UN LUGAR VISIBLE Y MOSTRARLO A LA AUTORIDAD COMPETENTE CUANDO SEA REQUERIDO. EL HACER CASO OMISO A ESTA DISPOSICIÓN LO HACE ACREEDOR A UNA SANSIÓN.</p>

          <p style="font-size: 1.5rem; font-weight: bold; margin: .5em 0;">ESTA LICENCIA NO ES TRANSFERIBLE NI NEGOCIABLE.</p>
        </div>
      </div>

      <!-- CUBIERTA DE PROTECCIÓN -->
      <div class="cubierta"></div>

      <?php if (isset($_SESSION['msg'])) {
        echo '<script>
        alert("'.$_SESSION['msg'].'");
        </script>';
        unset($_SESSION['msg']);
      } ?>
    </body>
    </html>
    <?php
  endif;
endif;
?>
