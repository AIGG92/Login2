<?php
session_start();
require 'admin/config.php';
require 'functions.php';
//comprobar session

if (isset($_SESSION['usuario'])) {
  //VALIDAR LOS DATOS POR PRIVILEGIO
  $conexion = conexion($bd_config);
  $usuario = iniciarSession('usuario',$conexion);

  if ($usuario['tipo_usuario'] == 'Administrador') {
    header('Location:'.RUTA.'admin.php');

  }else if ($usuario['tipo_usuario'] == 'Usuario') {
    header('Location:'.RUTA.'usuario.php');
  }else {
    header('Location:'.RUTA.'login.php');
  }
}else {
  header('Location:'.RUTA.'login.php');
}





 ?>
