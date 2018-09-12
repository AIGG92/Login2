<?php
session_start();
require 'admin/config.php';
require 'functions.php';

$errores = "";

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
  $usuario = $_POST['usuario'];
  $password = $_POST['password'];
  $password = hash('sha512',$password);

  $conexion = conexion($bd_config);
  $statement = $conexion->prepare("SELECT * FROM  usuario WHERE usuario = :usuario and password = :password");
  $statement->execute([
    ':usuario' => $usuario,
    ':password' => $password
  ]);
  $resultado = $statement->fetch();

  if ($resultado !== false) {
    $errores = '<li>Tu Usuario Y/O contraseña son incorrectas</li>';
  }

  if ($errores == '') {
    $_SESSION['usuario'] = $usuario;
    header('Location:'.RUTA.'index.php');
  }else {
    $errores.='<li class"error">Tu Usuario y/o contraseña son incorrectas</li>';
  }

}

require 'views/login.view.php';

 ?>
