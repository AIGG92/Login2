<?php
session_start();
require 'admin/config.php';
require 'functions.php';

//Comprobar seccion
if (!isset($_SESSION['usuario'])) {
  header('Location:'.RUTA.'usuario.php');
}

$conexion = conexion($bd_config);
$user = iniciarSession('usuario',$conexion);

if ($user['tipo_usuario'] == 'Usuario') {
  require 'views/usuario.view.php';
}else {
  header('Location:'.RUTA.'index.php');
}
 ?>
