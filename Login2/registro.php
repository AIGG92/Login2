<?php
session_start();
require('admin/config.php');
require('functions.php');

if ($_SERVER['REQUEST_METHOD'] == 'POST') {

  $usuario = limpiarDatos($_POST['usuario']);
  $password = limpiarDatos($_POST['password']);
  $password = hash('sha512',$password); //para protreger con ecriptacion
  $rol = $_POST['rol'];

  $errores = "";

  //Validar los campos de texto
  if (empty($usuario) || empty($password)  || empty($rol)){
    $errores .= '<li class = "error">Por Favor rellene los campos</li>';
  }else{
    //validacion de que no exista
    $conexion = conexion($bd_config);
    $statement = $conexion->prepare("SELECT * FROM usuario WHERE usuario = :usuario LIMIT 1");
    $statement->execute([
      ':usuario' => $usuario
    ]);
    $resultado = $statement->fetch(); //extraera todos los valores de la tabla
    if ($resultado != false) {
      $errores .= '<li class = "error">Este Usuario ya existe</li>';
    }
  }
  if ($errores == '') {
    $conexion = conexion($bd_config);
    $statement = $conexion->prepare('INSERT INTO usuario (id, usuario, password, tipo_usuario) VALUES (null, :usuario, :password, :tipo_usuario)');
    $statement->execute([
      ':usuario' => $usuario,
      ':password' => $password,
      ':tipo_usuario' => $rol
    ]);
   header('Location:'.RUTA.'Login.php');
  }


}

require('views/registro.view.php');
 ?>
