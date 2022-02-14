<?php
include_once 'header.php';
include_once 'menu.php';
?>

<main class="container">
  <section class="row justify-content-center">
    <div class="col-xl-12 centrar-contenedor">
      <div class="contenedor">
        <div class="titulo-contenedor">
          <h2>Recaudación</h2>
        </div>

        <div class="contenido-contenedor centrar-botones">
          <div class="container-fluid">
            <div class="row justify-content-center">
              <div class="col-12">
                <p>Seleccione el trámite que va a realizar:</p>
              </div>

              <div class="col-3">
                <a class="enlace-boton" href="/licencias_comerciales">Licencia comercial</a>
              </div>

              <div class="col-3">
                <a class="enlace-boton" href="/licencias_alcoholes">Licencia de alcoholes</a>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
</main>

<?php include_once 'footer.php'; ?>
