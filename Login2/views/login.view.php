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
        <h2 id="formLogin">Login</h2>
      </div>
    </header>
    <div class="container">
      <center>
        <div id="linea_form">

          <form id="idForm" class="" action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>" method="post">
            <h2 id="h2">Introduce tu Credenciales</h2>

            <div class="input-group">
              <input id="idUsuario" type="text" name="usuario" placeholder="Usuario" class="form-control">
              <br>
            </div>

            <div class="input-group">
              <input type="password" name="password" placeholder="Contraseña">
              <br>
            </div>
            <ul>
              <?php if(!empty($errores)): ?>
                  <?php echo $errores ?>
              <?php endif; ?>
            </ul>
              <button type="submit" name="button" class="btn btn-primary" onclick="ValidarUsuario()">Ingresar</button>
          </form>


          <a href="registro.php"class="error">No Tienes Cuenta ?</a>
        </div>
      </center>


    </div>
  </body>

</html>
