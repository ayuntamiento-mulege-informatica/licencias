<?php
include_once 'header.php';
include_once 'menu.php';
?>

<main class="container">
  <section class="row">
    <div class="col-12 centrar-contenedor">
      <div class="contenedor">
        <div class="titulo-contenedor">
          <h2>Informática</h2>
        </div>

        <div class="contenido-contenedor">
          <div class="container-fluid">
            <div class="row justify-content-center">
              <div class="col-4">
                <h3>Usuarios</h3>
                <div class="centrar-botones">
                  <a class="enlace-boton" href="/registrar_usuario">Registrar usuario</a>
                  <a class="enlace-boton" href="/lista_usuarios">Lista de usuarios</a>
                </div>
              </div>

              <div class="col-4">
                <h3>Administraciones</h3>
                <div class="centrar-botones">
                  <a class="enlace-boton" href="/registrar_administracion">Registrar administración</a>
                  <a class="enlace-boton" href="/actualizar_administracion">Actualizar administración</a>
                </div>
              </div>

              <div class="col-4">
                <h3>Tickets</h3>
                <div class="centrar-botones">
                  <a class="enlace-boton" href="/revisar_tickets">Revisar tickets</a>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
</main>

<?php include_once 'footer.php'; ?>
