<?php
require_once 'lib/class_licencias_alcoholes.php';
// require_once 'lib/class_administraciones.php';

$licencias_alcoholes = new licencias_alcoholes;
// $administraciones = new administraciones;

if (isset($parametro_2)) {
  $folio = $parametro_2;
}
else {
  $_SESSION['msg'] = 'No ha proporcionado el folio de la licencia.';

  header('location: /lista_licencias_alcoholes');
}

$licencia = $licencias_alcoholes -> infoLicenciaAlcoholes($connect, $folio);

include_once 'header.php';
include_once 'menu.php';
?>

<main class="container">
  <section class="row justify-content-center">
    <div class="col-12">
      <div class="contenedor">
        <div class="titulo-contenedor">
          <h2>Nueva licencia de alcoholes</h2>
        </div>

        <div class="contenido-contenedor">
          <form class="container-fluid" action="/lib/procesar_edicion_licencia_alcoholes.php" method="post">
            <div class="row">
              <div class="col-2">
                <label for="folio">Folio:</label><br>
                <input id="folio_anterior" type="hidden" name="folio_anterior" value="<?php echo $licencia['folio']; ?>" required>
                <input id="folio" type="text" name="folio" value="<?php echo $licencia['folio']; ?>" required>
                <input type="hidden" name="administracion" value="<?php echo $licencia['admin']; ?>" required>
              </div>

              <div class="col-1">
                <label for="">Tipo:</label><br>
                <select name="tipo" required>
                  <?php
                  if ($licencia['tipo'] == 'A') { echo '<option value="A" selected>A</option>'; }
                  else { echo '<option value="A">A</option>'; }

                  if ($licencia['tipo'] == 'B') { echo '<option value="B" selected>B</option>'; }
                  else { echo '<option value="B">B</option>'; }

                  if ($licencia['tipo'] == 'C') { echo '<option value="C" selected>C</option>'; }
                  else { echo '<option value="C">C</option>'; }

                  if ($licencia['tipo'] == 'D') { echo '<option value="D" selected>D</option>'; }
                  else { echo '<option value="D">D</option>'; }

                  if ($licencia['tipo'] == 'E') { echo '<option value="E" selected>E</option>'; }
                  else { echo '<option value="E">E</option>'; }
                  ?>
                </select>
              </div>

              <div class="col-2">
                <label for="destino">Destino:</label><br>
                <select id="destino" name="destino" required>
                  <?php
                  if ($licencia['destino'] == 'VENTA') { echo '<option value="VENTA" selected>VENTA</option>'; }
                  else{ echo '<option value="VENTA">VENTA</option>'; }

                  if ($licencia['destino'] == 'CONSUMO') { echo '<option value="CONSUMO" selected>CONSUMO</option>'; }
                  else{ echo '<option value="CONSUMO">CONSUMO</option>'; }

                  if ($licencia['destino'] == 'DISTRIBUCIÓN') { echo '<option value="DISTRIBUCIÓN" selected>DISTRIBUCIÓN</option>'; }
                  else{ echo '<option value="DISTRIBUCIÓN">DISTRIBUCIÓN</option>'; }
                  ?>
                </select>
              </div>

              <div class="col-2">
                <label for="anyo">Año:</label><br>
                <select id="anyo" name="anyo" required>
                  <?php $anyo = date('Y'); ?>
                  <?php for ($i=$anyo; $i < ($anyo+10); $i++) {
                    if ($licencia['anyo'] == $i) { echo '<option value="'.$i.'" selected>'.$i.'</option>'; }
                    else { echo '<option value="'.$i.'">'.$i.'</option>'; }
                  } ?>
                </select>
              </div>

              <div class="col-2">
                <label for="caracteristicas">Características:</label><br>
                <select id="caracteristicas" name="caracteristicas" required>
                  <?php
                  if ($licencia['caracteristicas'] == 'NUEVA') { echo '<option value="NUEVA" selected>NUEVA</option>'; }
                  else { echo '<option value="NUEVA">NUEVA</option>'; }

                  if ($licencia['caracteristicas'] == 'CONTINUAR') { echo '<option value="CONTINUAR" selected>CONTINUAR</option>'; }
                  else { echo '<option value="CONTINUAR">CONTINUAR</option>'; }
                  ?>
                </select>
              </div>

              <div class="col-3">
                <label for="rfc">RFC:</label><br>
                <input id="rfc" type="text" name="rfc" maxlength="13" pattern="[A-Z0-9]{10,13}" value="<?php echo $licencia['rfc']; ?>" required>
              </div>

              <div class="col-6">
                <label for="propietario">Propietario:</label><br>
                <input id="propietario" type="text" name="propietario" value="<?php echo $licencia['propietario']; ?>" required>
              </div>

              <div class="col-6">
                <label for="nombre_comercial">Nombre comercial:</label><br>
                <input id="nombre_comercial" type="text" name="nombre_comercial" value="<?php echo $licencia['nombre_comercial']; ?>" required>
              </div>

              <div class="col-12">
                <label for="actividad">Actividad:</label><br>
                <input id="actividad" type="text" name="actividad" value="<?php echo $licencia['actividad']; ?>" required>
              </div>

              <div class="col-9">
                <label for="domicilio">Domicilio:</label><br>
                <input id="domicilio" type="text" name="domicilio" value="<?php echo $licencia['domicilio']; ?>" required>
              </div>

              <div class="col-3">
                <label for="fecha_expedicion">Fecha de expedición:</label><br>
                <input id="fecha_expedicion" type="date" name="fecha_expedicion" value="<?php echo $licencia['fecha_emision']; ?>" required>
              </div>
            </div>

            <div class="row">
              <div class="col-12 centrar-botones">
                <input type="submit" name="accion" value="Actualizar licencia">
              </div>
            </div>
          </form>
        </div>
      </div>
    </div>
  </section>
</main>
<?php
if (isset($_SESSION['msg'])) {
  echo '<script>
  alert("'.$_SESSION['msg'].'");
  </script>';
  unset($_SESSION['msg']);
}
include_once 'footer.php';
?>
