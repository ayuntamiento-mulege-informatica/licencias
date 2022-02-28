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
  function registrarLicenciaAlcoholes($connect, $folio, $tipo, $anyo, $caracteristicas, $rfc, $propietario, $nombre_comercial, $actividad, $domicilio, $fecha_expedicion) {
    $sql = "INSERT INTO licencias_alcoholes (folio, tipo, anyo, caracteristicas, rfc, propietario, nombre_comercial, actividad, domicilio, fecha_expedicion) VALUES ($folio, '$tipo', $anyo, '$caracteristicas', '$rfc', '$propietario', '$nombre_comercial', '$actividad', '$domicilio', '$fecha_expedicion')";

     mysqli_query($connect, $sql) or die ($connect -> error.' No se ha podido crear la licencia.');

     return 'La licencia ha sido creada exitosamente.';
  }
}

?>
