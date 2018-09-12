<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Login</title>
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/bootstrap.css">
    <link rel="stylesheet" href="css/bootstrap-responsive.css">
    <script type="text/javascript" src="js/validador.js"></script>
  </head>
  <body>
    <header>
      <div class="">
        <h2 id="formLogin">Registro de Usuario</h2>
      </div>
    </header>
    <div class="container">
      <center>
        <div id="linea_form">

          <form id="idForm" class="" action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>" method="post">
            <h2 id="h2">Registro</h2>

            <div class="input-group">
              <input id="idUsuario" type="text" name="usuario" placeholder="Usuario" class="form-control">
              <br>
            </div>

            <div class="input-group">
              <input type="password" name="password" placeholder="Contraseña">
              <br>
            </div>

            <div class="input-group">
              <select class="form-control" name="rol">
                <option value="">Seleciona Privilegio</option>
                <option value="Administrador">Administrador</option>
                <option value="Usuario">Usuario</option>
              </select>
              <br>
            </div>
              <?php if (!empty($errores)):?>
                <ul>
                  <?php echo $errores; ?>
                </ul>
              <?php endif; ?>

              <button type="submit" name="button" class="btn btn-primary" onclick="ValidarUsuario()">Registrar</button>

          </form>
          <a href="Login.php">Login Usuario</a>
        </div>
      </center>
