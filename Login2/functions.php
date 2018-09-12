<?php
require('admin/config.php');
define("RUTA","http://localhost:8080/Curso_php/Login2/");

//Conexion BD
function conexion($bd_config){
try {
$conexion = new PDO("mysql:host = localhost; dbname=".$bd_config['db_name'],$bd_config['user'],$bd_config['pass']);
return $conexion;

} catch (PDOException $ex) {
  return false;
  echo $ex->getMessaget();
}

}

function limpiarDatos($datos){
  $datos = trim($datos);
  $datos = htmlspecialchars($datos);
  $datos = filter_var($datos, FILTER_SANITIZE_STRING);
  return $datos;
}

function iniciarSession($tabla,$conexion){
  $statement = $conexion->prepare("SELECT * FROM $tabla WHERE usuario = :usuario");
  $statement->execute([
    ':usuario' => $_SESSION['usuario']
  ]);
  return $statement->fetch(PDO::FETCH_ASSOC);
}

 ?>
