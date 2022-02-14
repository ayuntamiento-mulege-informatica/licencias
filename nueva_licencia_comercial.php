<?php
include_once 'header.php';
include_once 'menu.php';
?>

<main class="container">
  <section class="row justify-content-center">
    <div class="col-12">
      <div class="contenedor">
        <div class="titulo-contenedor">
          <h2>Nueva licencia comercial</h2>
        </div>

        <div class="contenido-contenedor">
          <form class="container-fluid" action="/lib/procesar_nueva_licencia_comercial.php" method="post">
            <div class="row">
              <div class="col-4">
                <!-- TIPO DE MOVIMIENTO -->
                <label for="tipo_movimiento">Tipo de movimiento:</label><br>
                <select id="tipo_movimiento" name="tipo_movimiento">
                  <option value="--TODOS--">--TODOS--</option>
                  <option value="LICENCIAS">LICENCIAS</option>
                  <option value="PERMISOS">PERMISOS</option>
                </select>

                <!-- ESTATUS GENERAL -->
                <label for="estatus_general">Estatus general:</label><br>
                <select id="estatus_general" name="estatus_general">
                  <option value="--TODOS--">--TODOS--</option>
                  <option value="ACTIVOS">ACTIVOS</option>
                  <option value="CANCELADOS">CANCELADOS</option>
                  <option value="REACTIVADOS">REACTIVADOS</option>
                </select>

                <!-- ESTATUS VIGENCIA -->
                <label for="estatus_vigencia">Estatus vigencia:</label><br>
                <select id="estatus_vigencia" name="estus_vigencia">
                  <option value="--TODOS--">--TODOS--</option>
                  <option value="VIGENTES">VIGENTES</option>
                  <option value="VENCIDOS">VENCIDOS</option>
                </select>

                <!-- ESTATUS SOLICITANTES -->
                <label for="estatus_solicitantes">Estatus solicitantes:</label><br>
                <select id="estatus_solicitantes" name="estatus_solicitantes">
                  <option value="--NO APLICA--">--NO APLICA--</option>
                  <option value="--TODOS--">--TODOS--</option>
                  <option value="LICENCIA NUEVA">LICENCIA NUEVA</option>
                  <option value="CAMBIO DE DOMICILIO">CAMBIO DE DOMICILIO</option>
                  <option value="CAMB/AMPL DE GIRO">CAMB/AMPL DE GIRO</option>
                </select>

                <!-- PERIODO -->
                <label for="periodo">Periodo:</label><br>
                <select id="periodo" name="periodo">
                  <option value=""></option>
                  <option value="ESTA SEMANA">ESTA SEMANA</option>
                  <option value="ESTE MES">ESTE MES</option>
                  <option value="ESTE AÑO">ESTE AÑO</option>
                  <option value="DEFINIR PERIODO">DEFINIR PERIODO</option>
                </select>
              </div>

              <div class="col-4">
                <!-- PROPIETARIO -->
                <label for="propietario">Propietario:</label><br>
                <input id="propietario" type="text" name="propietario">

                <!-- DOMICILIO -->
                <label for="domicilio">Domicilio:</label><br>
                <input id="domicilio" type="text" name="domicilio">

                <!-- GIRO COMERCIAL -->
                <label for="giro_comercial">Giro(s) comercial(es):</label><br>
                <input id="giro_comercial" type="text" name="giro_comercial">

                <!-- TIPO DE GIRO -->
                <label for="tipo_de_giro">Tipo de giro:</label><br>
                <select id="tipo_de_giro" name="tipo_de_giro">
                  <option value="--TODOS--">--TODOS--</option>
                  <option value="BLANCO">BLANCO</option>
                  <option value="BLANCO RESTR.">BLANCO RESTR.</option>
                  <option value="RESTRINGIDO">RESTRINGIDO</option>
                  <option value="PERMISO PROV.">PERMISO PROV.</option>
                </select>

                <!-- ESTATUS REGISTRO -->
                <label for="estatus_registros">Estatus registro:</label><br>
                <select id="estatus_registros" name="estatus_registros">
                  <option value="--TODOS--">--TODOS--</option>
                  <option value="NUEVAS">NUEVAS</option>
                  <option value="REFRENDOS">REFRENDOS</option>
                </select>

                <!-- ADEUDA DESDE -->
                <label for="adeuda">Adeuda desde:</label><br>
                <input id="adeuda" type="checkbox" name="adeuda" value="Si">
                <input type="date" name="adeuda_desde" value="<?php echo date('Y-m-d'); ?>">
              </div>

              <div class="col-4">
                <!-- ANUNCIOS -->
                <label for="anuncios">Anuncios:</label><br>
                <select id="anuncios" name="anuncios">
                  <option value="--TODOS--">--TODOS--</option>
                  <option value="SI">SI</option>
                  <option value="NO">NO</option>
                </select>

                <!-- EMPLEADOS -->
                <label for="empleados">Empleados:</label><br>
                <select id="empleados" name="empleados">
                  <option value="--TODOS--">--TODOS--</option>
                  <option value="SI">SI</option>
                  <option value="NO">NO</option>
                </select>

                <hr>

                <!-- SUPERFICIE -->
                <label for="">Superficie (m2):</label><br>
                <label for="superficie_desde">Desde:</label><br>
                <input id="superficie_desde" type="text" name="superficie_desde">
                <label for="superficie_hasta">Hasta:</label><br>
                <input id="superficie_hasta" type="text" name="superficie_hasta">

                <hr>

                <!-- PAGOS RECIBIDOS -->
                <label for="">Pagos recibidos:</label><br>
                <label for="pago_recibido_desde">Desde:</label><br>
                <input id="pago_recibido_desde" type="date" name="pago_recibido_desde" value="<?php echo date('Y-m-d'); ?>">
                <label for="pago_recibido_hasta">Hasta:</label><br>
                <input id="pago_recibido_hasta" type="date" name="pago_recibido_hasta" value="<?php echo date('Y-m-d'); ?>">
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
