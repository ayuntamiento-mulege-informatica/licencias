<?php
require_once 'lib/class_licencias_alcoholes.php';

$licencias_alcoholes = new licencias_alcoholes;

if (isset($_POST['accion'])) {
  $lista_licencias_alcoholes = $licencias_alcoholes -> BuscarLicenciasAlcoholes($connect, $_POST['folio'], $_POST['propietario'], $_POST['nombre_comercial']);
}
else {
  $lista_licencias_alcoholes = $licencias_alcoholes -> ListaLicenciasAlcoholesTodas($connect);
}


include_once 'header.php';
include_once 'menu.php';
?>

<main class="container-fluid">
  <section class="row">
    <div class="col-12">
      <div class="contenedor">
        <div class="titulo-contenedor">
          <h2>Licencias de alcoholes</h2>
        </div>

        <div class="contenido-contenedor" style="overflow: auto;">
          <table style="font-size: .8rem;">
            <tr>
              <th colspan="3">ACCIONES</th>
              <th>FOLIO</th>
              <th>ADMIN.</th>
              <th>TIPO</th>
              <th>DESTINO</th>
              <th>AÑO</th>
              <th>CARACTERÍSTICAS</th>
              <th>RFC</th>
              <th>PROPIETARIO</th>
              <th>NOMBRE COMERCIAL</th>
              <th>ACTIVIDAD</th>
              <th>DOMICILIO</th>
              <th>FECHA DE EMISIÓN</th>
              <th>ESTATUS</th>
            </tr>

            <?php if (isset($lista_licencias_alcoholes)):
              foreach ($lista_licencias_alcoholes as $licencia): ?>
              <tr>
                <td><a href="/editar_licencia_alcoholes/<?php echo $licencia['folio']; ?>" title="Editar licencia"><span class="fas fa-2x fa-pencil-alt"></span></a></td>
                <td><a href="/eliminar_licencia_alcoholes/<?php echo $licencia['folio']; ?>" title="Eliminar licencia" onclick="return eliminarLicencia()"><span class="fas fa-2x fa-eraser"></span></a></td>
                <td><a href="/imprimir_licencia_alcoholes/<?php echo $licencia['folio']; ?>" title="Imprimir licencia" target="_blank"><span class="fas fa-2x fa-print"></span></a></td>
                <td><?php echo $licencia['folio']; ?></td>
                <td><?php echo $licencia['admin']; ?></td>
                <td><?php echo $licencia['tipo']; ?></td>
                <td><?php echo $licencia['destino']; ?></td>
                <td><?php echo $licencia['anyo']; ?></td>
                <td><?php echo $licencia['caracteristicas']; ?></td>
                <td><?php echo $licencia['rfc']; ?></td>
                <td><?php echo $licencia['propietario']; ?></td>
                <td><?php echo $licencia['nombre_comercial']; ?></td>
                <td><?php echo $licencia['actividad']; ?></td>
                <td><?php echo $licencia['domicilio']; ?></td>
                <td><?php echo $licencia['fecha_emision']; ?></td>
                <td><?php echo $licencia['estatus']; ?></td>
              </tr>
              <?php endforeach;
              else: ?>
              <tr>
                <td colspan="16">Aún no hay licencias registradas.</td>
              </tr>
            <?php endif; ?>
          </table>
        </div>
      </div>
    </div>
  </section>
</main>

<script type="text/javascript">
  function eliminarLicencia() {
    if (confirm('Está a punto de eliminar una licencia\n¿Desea continuar?')) {
      return true;
    }
    else {
      return false;
    }
  }
</script>

<?php
if (isset($_SESSION['msg'])) {
  echo '<script>
  alert("'.$_SESSION['msg'].'");
  location.href="/lista_licencias_alcoholes";
  </script>';
  unset($_SESSION['msg']);
}

include_once 'footer.php';
?>
