<nav class="menu">
  <div class="container">
    <div class="row">
      <div class="col-9">
        <ul id="menu-izquierdo">
          <?php if ($seccion != '/'): ?>
            <li><a class="enlace-boton" href="/"><span class="fas fa-home"></span> Inicio</a></li>
          <?php endif; ?>

          <?php
          switch ($area) {
            case 'Informática':
              if ($_SERVER['REQUEST_URI'] == '/modificar_usuario/'.$parametro_2){
                echo '<li> <a class="enlace-boton" href="/lista_usuarios">Lista de usuarios</a> </li>';
              }
              break;

            case 'Recaudación':
              if ($_SERVER['REQUEST_URI'] == '/nueva_licencia_comercial'){
                echo '<li> <a class="enlace-boton" href="/licencias_comerciales">Licencias comerciales</a> </li>';
              }
              break;

            default:
              // code...
              break;
          }
          ?>
        </ul>
      </div>

        <?php if (isset($_SESSION['usuario'])): ?>
          <div class="col-3">
            <ul id="menu-derecho">
              <li><a class="enlace-boton" href="/logout">Cerrar sesión</a></li>
            </ul>
          </div>
        <?php endif; ?>
      </div>
    </div>
  </nav>
