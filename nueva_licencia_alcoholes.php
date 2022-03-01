<?php
require_once 'lib/class_licencias_alcoholes.php';
require_once 'lib/class_administraciones.php';

$licencias_alcoholes = new licencias_alcoholes;
$administraciones = new administraciones;

$contar_folios = $licencias_alcoholes -> contarLicenciasAlcoholes($connect);
$administracion_actual = $administraciones -> administracionActual($connect);

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
          <form class="container-fluid" action="/lib/procesar_licencia_alcoholes.php" method="post">
            <div class="row">
              <div class="col-2">
                <label for="folio">Folio:</label><br>
                <input id="folio" type="text" name="folio" value="<?php echo $contar_folios+1; ?>" readonly required>
                <input type="hidden" name="administracion" value="<?php echo $administracion_actual; ?>">
              </div>

              <div class="col-2">
                <label for="">Tipo:</label><br>
                <select name="tipo" required>
                  <option value=""></option>
                  <option value="A">A</option>
                  <option value="B">B</option>
                  <option value="C">C</option>
                  <option value="D">D</option>
                  <option value="E">E</option>
                </select>
              </div>

              <div class="col-2">
                <label for="anyo">Año:</label><br>
                <select id="anyo" name="anyo" required>
                  <option value=""></option>
                  <?php $anyo = date('Y'); ?>
                  <option value="<?php echo $anyo ?>"><?php echo $anyo; ?></option>
                  <?php for ($i=$anyo; $i < ($anyo+10); $i++) {
                    echo '<option>'.$i.'</option>';
                  } ?>
                </select>
              </div>

              <div class="col-2">
                <label for="caracteristicas">Características:</label><br>
                <select id="caracteristicas" name="caracteristicas" required>
                  <option value=""></option>
                  <option value="NUEVA">NUEVA</option>
                  <option value="CONTINUAR">CONTINUAR</option>
                </select>
              </div>

              <div class="col-4">
                <label for="rfc">RFC:</label><br>
                <input id="rfc" type="text" name="rfc" maxlength="13" pattern="[A-Z0-9]{10,13}" required>
              </div>

              <div class="col-6">
                <label for="propietario">Propietario:</label><br>
                <input id="propietario" type="text" name="propietario" required>
              </div>

              <div class="col-6">
                <label for="nombre_comercial">Nombre comercial:</label><br>
                <input id="nombre_comercial" type="text" name="nombre_comercial" required>
              </div>

              <div class="col-12">
                <label for="actividad">Actividad:</label><br>
                <input id="actividad" type="text" name="actividad" required>
              </div>

              <div class="col-9">
                <label for="domicilio">Domicilio:</label><br>
                <input id="domicilio" type="text" name="domicilio" required>
              </div>

              <div class="col-3">
                <label for="fecha_expedicion">Fecha de expedición:</label><br>
                <input id="fecha_expedicion" type="date" name="fecha_expedicion" value="<?php echo date('Y-m-d'); ?>" required>
              </div>
            </div>

            <div class="row">
              <div class="col-12 centrar-botones">
                <input type="submit" name="accion" value="Registrar licencia comercial">
              </div>
            </div>
          </form>
        </div>
      </div>
    </div>
  </section>
</main>

<?php include_once 'footer.php'; ?>
