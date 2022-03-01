<?php
require_once 'lib/class_licencias_alcoholes.php';

$licencias_alcoholes = new licencias_alcoholes;

$lista_licencias_alcoholes = $licencias_alcoholes -> ListaLicenciasAlcoholesTodas($connect);

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
          <table>
            <tr>
              <th colspan="4">ACCIONES</th>
              <th>FOLIO</th>
              <th>ADMIN.</th>
              <th>TIPO</th>
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
                <td><a href="" title="Ver licencia"><span class="fas fa-2x fa-eye"></span></a></td>
                <td><a href="/editar_licencia_alcoholes/<?php echo $licencia['folio']; ?>" title="Editar licencia"><span class="fas fa-2x fa-pencil-alt"></span></a></td>
                <td><a href="" title="Eliminar licencia"><span class="fas fa-2x fa-eraser"></span></a></td>
                <td><a href="/imprimir_licencia_alcoholes/<?php echo $licencia['folio']; ?>" title="Imprimir licencia" target="_blank"><span class="fas fa-2x fa-print"></span></a></td>
                <td><?php echo $licencia['folio']; ?></td>
                <td><?php echo $licencia['admin']; ?></td>
                <td><?php echo $licencia['tipo']; ?></td>
                <td><?php echo $licencia['anyo']; ?></td>
                <td><?php echo $licencia['caracteristicas']; ?></td>
                <td><?php echo $licencia['rfc']; ?></td>
                <td><?php echo $licencia['propietario']; ?></td>
                <td><?php echo $licencia['nombre_comercial']; ?></td>
                <td><?php echo $licencia['actividad']; ?></td>
                <td><?php echo $licencia['domicilio']; ?></td>
                <td><?php echo $licencia['fecha_emision']; ?></td>
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

<?php include_once 'footer.php'; ?>
