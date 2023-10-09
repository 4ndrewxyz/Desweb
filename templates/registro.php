<?php

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" />
    <link rel="stylesheet" href="../public/css/navegador.css">
    <link rel="stylesheet" href="/public/css/registro.css">
    <link rel="shortcut icon" href="../public/img/R.jpeg" />
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    <title>desweb</title>
</head>
<body>

<?php include 'navegacion.php'; ?>


<br><br><br><br><br><br><!---->
<body>
<div class="container">
    <div class="image">
    <div class="welcome-text">Registrate <br>con nosotros</div>
        <img src="/public/img/car2.jpeg" alt="Image Description">
    </div>
    <div class="form">
            <h2>Registrarme</h2>
            <form action="registro-script.php" method="POST">
                <input type="text" name="name" placeholder="Nombre" required>
                <input type="text" name="lastname" placeholder="Apellido" required>
                <input type="email" name="email" placeholder="Correo" required>
                <input type="password" name="password" placeholder="Contraseña" required>
                <input type="tel" name="phone" placeholder="Phone" required>
                <input type="org" name="org" placeholder="Organizacion / Escuela" required>
                <input type="text" name="state_country" placeholder="Estado/Pais" required>
                <button type="submit">Registrarme</button>
            </form>
        </div>
    
</div>
</body>
</html>
