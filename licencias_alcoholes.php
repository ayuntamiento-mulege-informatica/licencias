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
              <p>Para realizar una búsqueda, escriba el dato en el campo correspondiente.<br><strong>Ningún campo es obligatorio</strong>.</p>
              <form action="/lista_licencias_alcoholes" method="post">
                <label for="folio">Por Folio:</label><br>
                <input id="folio" type="text" name="folio">

                <label for="propietario">Por propietario:</label><br>
                <input id="propietario" type="text" name="propietario">

                <label for="nombre_comercial">Por nombre comercial:</label><br>
                <input id="nombre_comercial" type="text" name="nombre_comercial">

                <input type="submit" name="accion" value="Buscar licencia">
              </form>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
</main>

<?php include_once 'footer.php'; ?>
