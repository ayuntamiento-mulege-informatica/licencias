<?php
/**
*
*/
class licencias_alcoholes {
  // Función para contar licencias de alcoholes.
  function contarLicenciasAlcoholes($connect) {
    $sql = "SELECT COUNT(*) AS contar FROM licencias_alcoholes";
    $query = mysqli_query($connect, $sql);
    $row = mysqli_fetch_array($query);

    return $row['contar'];
  }

  // Función para registrar licencias de alcoholes.
  function registrarLicenciaAlcoholes($connect, $folio, $admin, $tipo, $anyo, $caracteristicas, $rfc, $propietario, $nombre_comercial, $actividad, $domicilio, $fecha_expedicion) {
    $sql = "INSERT INTO licencias_alcoholes (folio, admin, tipo, anyo, caracteristicas, rfc, propietario, nombre_comercial, actividad, domicilio, fecha_expedicion) VALUES ($folio, '$admin', '$tipo', $anyo, '$caracteristicas', '$rfc', '$propietario', '$nombre_comercial', '$actividad', '$domicilio', '$fecha_expedicion')";

    mysqli_query($connect, $sql) or die ($connect -> error.' No se ha podido crear la licencia.');

    return 'La licencia ha sido creada exitosamente.';
  }

  // Función para imprimir información de licencia de alcoholes.
  function infoLicenciaAlcoholes($connect, $folio) {
    $sql = "SELECT * FROM licencias_alcoholes WHERE folio = $folio";
    $query = mysqli_query($connect, $sql);
    $row = mysqli_fetch_array($query);

    if (isset($row)) {
      return array(
        'folio' => $row['folio'],
        'admin' => $row['admin'],
        'tipo' => $row['tipo'],
        'anyo' => $row['anyo'],
        'caracteristicas' => $row['caracteristicas'],
        'rfc' => $row['rfc'],
        'propietario' => $row['propietario'],
        'nombre_comercial' => $row['nombre_comercial'],
        'actividad' => $row['actividad'],
        'domicilio' => $row['domicilio'],
        'fecha_expedicion' => $row['fecha_expedicion']
      );
    }
    else {
      return null;
    }
  }

  function ListaLicenciasAlcoholesTodas($connect) {
    $sql = "SELECT * FROM licencias_alcoholes";
    $query = mysqli_query($connect, $sql);
    while ($row = mysqli_fetch_array($query)) {
      $licencias[] = array(
        'folio' => $row['folio'],
        'admin' => $row['admin'],
        'tipo' => $row['tipo'],
        'anyo' => $row['anyo'],
        'caracteristicas' => $row['caracteristicas'],
        'rfc' => $row['rfc'],
        'propietario' => $row['propietario'],
        'nombre_comercial' => $row['nombre_comercial'],
        'actividad' => $row['actividad'],
        'domicilio' => $row['domicilio'],
        'fecha_expedicion' => $row['fecha_expedicion']
      );
    }

    if (isset($licencias)) {
      return $licencias;
    }
    else {
      return null;
    }
  }

  // Fecha con letra.
  function obtenerFechaEnLetra($fecha){
    // $dia = $this -> conocerDiaSemanaFecha($fecha);
    $num = date("j", strtotime($fecha));
    $anno = date("Y", strtotime($fecha));
    $mes = array('ENERO', 'FEBRERO', 'MARZO', 'ABRIL', 'MAYO', 'JUNIO', 'JULIO', 'AGOSTO', 'SEPTIEMBRE', 'OCTUBRE', 'NOVIEMBRE', 'DICIEMBRE');
    $mes = $mes[(date('m', strtotime($fecha))*1)-1];
    // return $dia.', '.$num.' de '.$mes.' del '.$anno;
    return $num.' DE '.$mes.' DE '.$anno;
  }

  function conocerDiaSemanaFecha($fecha) {
    $dias = array('DOMINGO', 'LUNES', 'MARTES', 'MIÉRCOLES', 'JUEVES', 'VIERNES', 'SÁBADO');
    $dia = $dias[date('w', strtotime($fecha))];
    return $dia;
  }
}

?>
