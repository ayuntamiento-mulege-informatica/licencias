<nav class="menu">
  <div class="container">
    <div class="row">
      <div class="col-9">
        <ul id="menu-izquierdo">
          <?php
          if ($seccion != '/'){
            echo '<li> <a class="enlace-boton" href="/"> <span class="fas fa-home"></span> Inicio</a> </li>';
          }

          switch ($area) {
            case 'Informática':
              if ($_SERVER['REQUEST_URI'] == '/modificar_usuario/'.$parametro_2){
                echo '<li> <a class="enlace-boton" href="/lista_usuarios">Lista de usuarios</a> </li>';
              }
              break;

            case 'Recaudación':
              switch ($_SERVER['REQUEST_URI']) {
                case '/nueva_licencia_comercial':
                case '/ver_licencias_comerciales':
                case '/ver_licencias_comerciales/'.$parametro_2:
                case '/cancelar_licencias_comerciales/'.$parametro_2:
                case '/cancelar_licencias_comerciales/'.$parametro_2:
                  echo '<li> <a class="enlace-boton" href="/licencias_comerciales">Licencias comerciales</a> </li>';
                  break;

                case '/lista_licencias_alcoholes':
                  echo '<li> <a class="enlace-boton" href="/licencias_alcoholes">Licencias de alcoholes</a> </li>';
              }

              if ($_SERVER['REQUEST_URI'] == '/nueva_licencia_alcoholes'){
                echo '<li> <a class="enlace-boton" href="/licencias_alcoholes">Licencias de alcoholes</a> </li>';
              }
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
