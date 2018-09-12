<?php
session_start();
require 'admin/config.php';
require 'functions.php';

//Comprobar seccion
if (!isset($_SESSION['usuario'])) {
  header('Location:'.RUTA.'login.php');
}

$conexion = conexion($bd_config);
$admin = iniciarSession('usuario',$conexion);

if ($admin['tipo_usuario']== 'Administrador') {
  require 'views/admin.view.php';
}else {
  header('Location:'.RUTA.'index.php');
}
 ?>
