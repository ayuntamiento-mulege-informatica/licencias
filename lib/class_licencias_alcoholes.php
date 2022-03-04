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
  function registrarLicenciaAlcoholes($connect, $folio, $admin, $tipo, $destino, $anyo, $caracteristicas, $rfc, $propietario, $nombre_comercial, $actividad, $domicilio, $fecha_emision) {
    $propietario = addslashes($propietario);
    $nombre_comercial = addslashes($nombre_comercial);

    $sql = "INSERT INTO licencias_alcoholes (folio, admin, tipo, destino, anyo, caracteristicas, rfc, propietario, nombre_comercial, actividad, domicilio, fecha_emision, estatus) VALUES ($folio, '$admin', '$tipo', '$destino', $anyo, '$caracteristicas', '$rfc', '$propietario', '$nombre_comercial', '$actividad', '$domicilio', '$fecha_emision', 'ACTIVO')";

    mysqli_query($connect, $sql) or die ($connect -> error.' No se ha podido crear la licencia.');

    return 'La licencia ha sido creada exitosamente.';
  }

  // Función para actualizar licencia de alcoholes.
  function actualizarLicenciaAlcoholes($connect, $folio, $admin, $tipo, $destino, $anyo, $caracteristicas, $rfc, $propietario, $nombre_comercial, $actividad, $domicilio, $fecha_emision) {
    $propietario = addslashes($propietario);
    $nombre_comercial = addslashes($nombre_comercial);

    $sql = "UPDATE licencias_alcoholes SET tipo = '$tipo', destino = '$destino', anyo = $anyo, caracteristicas = '$caracteristicas', rfc = '$rfc', propietario = '$propietario', nombre_comercial = '$nombre_comercial', actividad = '$actividad', domicilio = '$domicilio', fecha_emision = '$fecha_emision' WHERE folio = $folio";

    mysqli_query($connect, $sql) or die ($connect -> error.' No ha sido posible actualizar la licencia.');

    return 'La licencia ha sido actualizada.';
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
        'destino' => $row['destino'],
        'anyo' => $row['anyo'],
        'caracteristicas' => $row['caracteristicas'],
        'rfc' => $row['rfc'],
        'propietario' => $row['propietario'],
        'nombre_comercial' => $row['nombre_comercial'],
        'actividad' => $row['actividad'],
        'domicilio' => $row['domicilio'],
        'fecha_emision' => $row['fecha_emision'],
        'estatus' => $row['estatus']
      );
    }
    else {
      return null;
    }
  }

  // Listado de todas las licencias de alcoholes.
  function ListaLicenciasAlcoholesTodas($connect) {
    $sql = "SELECT * FROM licencias_alcoholes";
    $query = mysqli_query($connect, $sql);

    while ($row = mysqli_fetch_array($query)) {
      $licencias[] = array(
        'folio' => $row['folio'],
        'admin' => $row['admin'],
        'tipo' => $row['tipo'],
        'destino' => $row['destino'],
        'anyo' => $row['anyo'],
        'caracteristicas' => $row['caracteristicas'],
        'rfc' => $row['rfc'],
        'propietario' => $row['propietario'],
        'nombre_comercial' => $row['nombre_comercial'],
        'actividad' => $row['actividad'],
        'domicilio' => $row['domicilio'],
        'fecha_emision' => $row['fecha_emision'],
        'estatus' => $row['estatus']
      );
    }

    if (isset($licencias)) { return $licencias; }
    else { return null; }
  }

  // Búsqueda de licencias de alcoholes.
  function BuscarLicenciasAlcoholes($connect, $folio, $propietario, $nombre_comercial) {
    $nombre_comercial = addslashes($nombre_comercial);

    $sql = "SELECT * FROM licencias_alcoholes WHERE folio LIKE '%$folio%' AND propietario LIKE '%$propietario%' AND nombre_comercial LIKE '%$nombre_comercial%'";
    $query = mysqli_query($connect, $sql);

    while ($row = mysqli_fetch_array($query)) {
      $licencias[] = array(
        'folio' => $row['folio'],
        'admin' => $row['admin'],
        'tipo' => $row['tipo'],
        'destino' => $row['destino'],
        'anyo' => $row['anyo'],
        'caracteristicas' => $row['caracteristicas'],
        'rfc' => $row['rfc'],
        'propietario' => $row['propietario'],
        'nombre_comercial' => $row['nombre_comercial'],
        'actividad' => $row['actividad'],
        'domicilio' => $row['domicilio'],
        'fecha_emision' => $row['fecha_emision'],
        'estatus' => $row['estatus']
      );
    }

    if (isset($licencias)) { return $licencias; }
    else { return null; }
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
