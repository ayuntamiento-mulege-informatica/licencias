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
              <a class="enlace-boton" style="width: 100%;" href="/nueva_licencia_alcoholes">Nueva licencia de alcoholes</a>
            </div>

            <div class="col-4">
              <h3>Consultar</h3>
              <a class="enlace-boton" style="width: 100%;" href="/lista_licencias_alcoholes">Ver todas las licencias</a><br>
            </div>

            <div class="col-4">
              <h3>Buscar</h3>
              
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
</main>

<?php include_once 'footer.php'; ?>
