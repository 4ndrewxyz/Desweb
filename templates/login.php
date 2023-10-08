<?php

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" />
    <link rel="stylesheet" href="../public/css/navegador.css">
    <link rel="stylesheet" href="/public/css/login.css">
    <link rel="shortcut icon" href="../public/img/R.jpeg" />
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    <title>desweb</title>
</head>
<body>

<?php include 'navegacion.php'; ?>


<br><br><br><!---->
<div class="container">
  <div class="form-container">
    <div class="image-container">
    <div class="welcome-text">Inicia <br>Sesion</div>
      <img src="/public/img/servicio2.jpeg" alt="Your Photo">
    </div>
    <div class="form">
      <form>
        <label for="email">Email:</label><br>
        <input type="email" id="email" name="email" required><br><br>
        <label for="password">Password:</label><br>
        <input type="password" id="password" name="password" required><br><br>
        <a href="#">Olvidaste tu contraseña?</a>
        <!-- <button type="submit">Login</button>  DE MIENTRAS QUE MANDE AL DASHBOARD-->
        <BR>
        <a href="dashboard.php" class="button-link"> Login</button> </a> <br>
        <a href="registro.php">No tienes cuenta? Registrate</a>
      </form>
    </div>
  </div>
</div>
    
</div>
</body>
</html>

