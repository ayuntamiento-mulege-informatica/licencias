<?php
include_once 'header.php';
include_once 'menu.php';
?>

<main class="container-fluid">
  <section class="row">
    <div class="col-12">
      <div class="contenedor">
        <div class="titulo-contenedor">
          <h2>Ver licencias comerciales</h2>

          <?php
          if (!isset($parametro_2)) {
            echo '<h3>Todas</h3>';
          }
          else {
            if ($parametro_2 == 'por_folio') {
              echo '<h3>Por folio</h3>';
            }
            elseif ($parametro_2 == 'por_nombre') {
              echo '<h3>Por nombre</h3>';
            }
            elseif ($parametro_2 == 'por_giro') {
              echo '<h3>Por giro</h3>';
            }
          }
          ?>
        </div>

        <div class="contenido-contenedor" style="overflow: auto;">
          <table>
            <tr>
              <th>FOLIO</th>
              <th>ADMINISTRACIÓN</th>
              <th>TIPO DE MOVIMIENTO</th>
              <th>TIPO DE GIRO</th>
              <th>ORDEN</th>
              <th>FECHA</th>
              <th>CLASIFICACIÓN</th>
              <th>ESTATUS GENERAL</th>
              <th>ESTATUS VIGENCIA</th>
              <th>ESTATUS SOLICITUDES</th>
              <th>ESTATUS REGISTRO</th>
              <th>PROPIETARIO</th>
              <th>EMPRESA</th>
              <th>DOMICILIO</th>
              <th>COLONIA</th>
              <th>ANUNCIOS</th>
              <th>EMPLEADOS</th>
              <th>GIRO PRINCIPAL</th>
              <th>REGISTRADO POR</th>
            </tr>
            <tr>
              <td></td>
              <td></td>
              <td></td>
              <td></td>
              <td></td>
              <td></td>
              <td></td>
              <td></td>
              <td></td>
              <td></td>
              <td></td>
              <td></td>
              <td></td>
              <td></td>
              <td></td>
              <td></td>
              <td></td>
              <td></td>
              <td></td>
            </tr>
          </table>
        </div>
      </div>
    </div>
  </section>
</main>

<?php include_once 'footer.php'; ?>
