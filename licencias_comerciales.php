<?php
include_once 'header.php';
include_once 'menu.php';
?>

<main class="container">
  <section class="row">
    <div class="col-xl-12">
      <div class="contenedor">
        <div class="titulo-contenedor">
          <h2>Acciones</h2>
        </div>
        <div class="contenido-contenedor container-fluid">
          <div class="row justify-content-center centrar-botones">
            <div class="col-4">
              <h3>Expedición</h3>
              <a class="enlace-boton" href="/nueva_licencia_comercial">Nueva licencia comercial</a>
            </div>

            <div class="col-4">
              <h3>Consultar</h3>
              <a class="enlace-boton" href="/ver_licencias_comerciales">Ver todas las licencias</a><br>
              <a class="enlace-boton" href="/ver_licencias_comerciales/por_folio">Por folio</a><br>
              <a class="enlace-boton" href="/ver_licencias_comerciales/por_nombre">Por nombre</a><br>
              <a class="enlace-boton" href="/ver_licencias_comerciales/por_giro">Por giro</a><br>
            </div>

            <div class="col-4">
              <h3>Cancelar</h3>
              <a class="enlace-boton" href="/cancelar_licencias_comerciales/por_folio">Por folio</a><br>
              <a class="enlace-boton" href="/cancelar_licencias_comerciales/por_nombre">Por nombre</a><br>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
</main>

<?php include_once 'footer.php'; ?>
